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
        <iframe id="powerBIFrame" title="TEMP" width="1300" height="580" 
    src="https://app.powerbi.com/reportEmbed?reportId=10cc5f4c-4f89-4e04-983d-fdb4caeeb8dd&autoAuth=true&ctid=ce5d08da-b13c-40d6-aab6-04501ee1ffbb&filterPaneEnabled=false&navContentPaneEnabled=false" 
    frameborder="0" allowFullScreen="true"></iframe>
        </div>
        
        

    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/powerbi-client@2.9.0/dist/powerbi.js"></script>
@endsection