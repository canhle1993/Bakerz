@extends('admin.dashboard')

@section('manage_admin')
<style>
    #powerBIFrame::backdrop {
      display: none;
  }
</style>
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
        @if(config('bakerz.integrations.power_bi_embed_url'))
        <iframe id="powerBIFrame" title="TEMP" width="1300" height="580" 
    src="{{ config('bakerz.integrations.power_bi_embed_url') }}" 
    frameborder="0" allowFullScreen="true"></iframe>
        @else
        <p class="mb-0 text-white">Power BI embed URL is not configured.</p>
        @endif
        </div>
        
        

    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/powerbi-client@2.9.0/dist/powerbi.js"></script>
@endsection
