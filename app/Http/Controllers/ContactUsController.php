<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;


class ContactUsController extends Controller
{
    // Hiển thị danh sách ContactUs
    public function index(Request $request)
    {
        $search = $request->query('search');
        
        $contacts = ContactUs::where('isdelete', 0)
            ->when($search, function ($query, $search) {
                return $query->where('name', 'like', '%' . $search . '%');
            })
            // Sắp xếp comment chưa trả lời lên đầu (status 'unanswered' lên đầu)
            ->orderByRaw("FIELD(status, 'unanswered', 'answered') ASC")
            ->paginate(10);
    
        return view('admin.contact_us.index', compact('contacts'));
    }
    


    // Xóa ContactUs
    public function delete($id)
    {
        $contact = ContactUs::findOrFail($id);
        $contact->isdelete = 1;
        $contact->save();

        return redirect()->route('admin.contact_us.index')->with('success', 'Contact deleted successfully');
    }

    // Hiển thị form trả lời
    public function showReplyForm($id)
    {
        $contact = ContactUs::findOrFail($id);
        return view('admin.contact_us.index', compact('contact'));
    }

    public function sendReply(Request $request, $id)
    {
        // Validate nội dung phản hồi
        $validator = Validator::make($request->all(), [
            'reply' => 'required|string|max:1000',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput();
        }
    
        // Tìm liên hệ dựa trên ID
        $contact = ContactUs::findOrFail($id);
    
        $reply = $request->input('reply');
    
        try {
            // Gửi email phản hồi
            Mail::raw($reply, function ($message) use ($contact) {
                $message->to($contact->email)
                    ->subject('Reply from BakerzBite');
            });
    
            // Lưu nội dung phản hồi và cập nhật trạng thái thành đã trả lời
            $contact->reply = $reply;
            $contact->status = 'answered'; // Đánh dấu trạng thái là đã trả lời
            $contact->save();
    
            // Nếu email gửi thành công
            return redirect()->route('admin.contact_us.index')->with('success', 'Reply sent successfully');
        } catch (\Exception $e) {
            // Ghi lỗi vào log nếu có sự cố khi gửi email
            \Illuminate\Support\Facades\Log::error("Failed to send email to: {$contact->email}. Error: {$e->getMessage()}");
            return redirect()->route('admin.contact_us.index')->with('error', 'Failed to send reply. Please try again.');
        }
    }
    

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:100',
        'address' => 'required|string|max:255',
        'comment' => 'required|string',
    ]);

    ContactUs::create([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'address' => $request->address,
        'comment' => $request->comment,
    ]);

    return redirect()->back()->with('success', 'Your message has been sent successfully.');
}

}
