<?php

declare(strict_types=1);

namespace League\Flysystem\GridFS;

use League\Flysystem\AdapterTestUtilities\FilesystemAdapterTestCase as TestCase;
use League\Flysystem\Config;
use League\Flysystem\DirectoryAttributes;
use League\Flysystem\FileAttributes;
use League\Flysystem\FilesystemAdapter;
use League\Flysystem\UnableToDeleteFile;
use League\Flysystem\UnableToReadFile;
use League\Flysystem\UnableToRetrieveMetadata;
use League\Flysystem\UnableToWriteFile;
use MongoDB\Client;
use MongoDB\Database;
use MongoDB\Driver\ReadPreference;
use function getenv;

/**
 * @group gridfs
 *
 * @method GridFSAdapter adapter()
 */
class GridFSAdapterTest extends TestCase
{
    /**
     * @var string
     */
    private static $adapterPrefix = 'test-prefix';

    public static function tearDownAfterClass(): void
    {
        self::getDatabase()->drop();

        parent::tearDownAfterClass();
    }

    /**
     * @test
     */
    public function fetching_contains_extra_metadata(): void
    {
        $adapter = $this->adapter();

        $this->runScenario(function () use ($adapter) {
            $this->givenWeHaveAnExistingFile('file.txt');
            $fileAttributes = $adapter->lastModified('file.txt');
            $extra = $fileAttributes->extraMetadata();
            $this->assertArrayHasKey('_id', $extra);
            $this->assertArrayHasKey('filename', $extra);
        });
    }

    /**
     * @test
     */
    public function fetching_last_modified_of_a_directory(): void
    {
        $this->expectException(UnableToRetrieveMetadata::class);

        $adapter = $this->adapter();

        $this->runScenario(function () use ($adapter) {
            $adapter->createDirectory('path', new Config());
            $adapter->lastModified('path/');
        });
    }

    /**
     * @test
     */
    public function fetching_mime_type_of_a_directory(): void
    {
        $this->expectException(UnableToRetrieveMetadata::class);

        $adapter = $this->adapter();

        $this->runScenario(function () use ($adapter) {
            $adapter->createDirectory('path', new Config());
            $adapter->mimeType('path/');
        });
    }

    /**
     * @test
     */
    public function reading_a_file_with_trailing_slash(): void
    {
        $this->expectException(UnableToReadFile::class);
        $this->adapter()->read('foo/');
    }

    /**
     * @test
     */
    public function reading_a_file_stream_with_trailing_slash(): void
    {
        $this->expectException(UnableToReadFile::class);
        $this->adapter()->readStream('foo/');
    }

    /**
     * @test
     */
    public function writing_a_file_with_trailing_slash(): void
    {
        $this->expectException(UnableToWriteFile::class);
        $this->adapter()->write('foo/', 'contents', new Config());
    }

    /**
     * @test
     */
    public function writing_a_file_stream_with_trailing_slash(): void
    {
        $this->expectException(UnableToWriteFile::class);
        $writeStream = stream_with_contents('contents');
        $this->adapter()->writeStream('foo/', $writeStream, new Config());
    }

    /**
     * @test
     */
    public function writing_a_file_with_a_invalid_stream(): void
    {
        $this->expectException(UnableToWriteFile::class);
        // @phpstan-ignore argument.type
        $this->adapter()->writeStream('file.txt', 'foo', new Config());
    }

    /**
     * @test
     */
    public function delete_a_file_with_trailing_slash(): void
    {
        $this->expectException(UnableToDeleteFile::class);
        $this->adapter()->delete('foo/');
    }

    /**
     * @test
     */
    public function reading_last_revision(): void
    {
        $this->runScenario(
            function () {
                $this->givenWeHaveAnExistingFile('file.txt', 'version 1');
                usleep(1000);
                $this->givenWeHaveAnExistingFile('file.txt', 'version 2');

                $this->assertSame('version 2', $this->adapter()->read('file.txt'));
            }
        );
    }

    /**
     * @testWith [false]
     *           [true]
     *
     * @test
     */
    public function listing_contents_last_revision(bool $deep): void
    {
        $this->runScenario(
            function () use ($deep) {
                $this->givenWeHaveAnExistingFile('file.txt', 'version 1');
                usleep(1000);
                $this->givenWeHaveAnExistingFile('file.txt', 'version 2');

                $files = $this->adapter()->listContents('', $deep);
                $files = iterator_to_array($files);

                $this->assertCount(1, $files);
                $file = $files[0];
                $this->assertInstanceOf(FileAttributes::class, $file);
                $this->assertSame('file.txt', $file->path());
            }
        );
    }

    /**
     * @test
     */
    public function listing_contents_directory_with_multiple_files(): void
    {
        $this->runScenario(
            function () {
                $this->givenWeHaveAnExistingFile('some/file-1.txt');
                $this->givenWeHaveAnExistingFile('some/file-2.txt');
                $this->givenWeHaveAnExistingFile('some/other/file-1.txt');

                $files = $this->adapter()->listContents('', false);
                $files = iterator_to_array($files);

                $this->assertCount(1, $files);
                $file = $files[0];
                $this->assertInstanceOf(DirectoryAttributes::class, $file);
                $this->assertSame('some', $file->path());
            }
        );
    }

    /**
     * @test
     */
    public function delete_all_revisions(): void
    {
        $this->runScenario(
            function () {
                $this->givenWeHaveAnExistingFile('file.txt', 'version 1');
                usleep(1000);
                $this->givenWeHaveAnExistingFile('file.txt', 'version 2');
                usleep(1000);
                $this->givenWeHaveAnExistingFile('file.txt', 'version 3');

                $this->adapter()->delete('file.txt');

                $this->assertFalse($this->adapter()->fileExists('file.txt'), 'File does not exist');
            }
        );
    }

    /**
     * @test
     */
    public function move_all_revisions(): void
    {
        $this->runScenario(
            function () {
                $this->givenWeHaveAnExistingFile('file.txt', 'version 1');
                usleep(1000);
                $this->givenWeHaveAnExistingFile('file.txt', 'version 2');
                usleep(1000);
                $this->givenWeHaveAnExistingFile('file.txt', 'version 3');

                $this->adapter()->move('file.txt', 'destination.txt', new Config());

                $this->assertFalse($this->adapter()->fileExists('file.txt'));
                $this->assertSame($this->adapter()->read('destination.txt'), 'version 3');
            }
        );
    }

    protected function tearDown(): void
    {
        self::getDatabase()->selectGridFSBucket()->drop();

        parent::tearDown();
    }

    protected static function createFilesystemAdapter(): FilesystemAdapter
    {
        $bucket = self::getDatabase()->selectGridFSBucket();
        $prefix = getenv('FLYSYSTEM_MONGODB_PREFIX') ?: self::$adapterPrefix;

        return new GridFSAdapter($bucket, $prefix);
    }

    private static function getDatabase(): Database
    {
        $uri = getenv('MONGODB_URI') ?: 'mongodb://127.0.0.1:27017/';
        $client = new Client($uri);

        return $client->selectDatabase(getenv('MONGODB_DATABASE') ?: 'flysystem_tests');
    }
}
