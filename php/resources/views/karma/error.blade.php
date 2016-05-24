@if (count($errors) > 0)
@foreach ($errors->all() as $error)
<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <i class="fa fa-exclamation-triangle"></i>
    {{ $error }}
</div>
@endforeach
@endif