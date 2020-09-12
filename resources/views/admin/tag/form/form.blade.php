<div class="from-group">
    {!! Form::label('name','Nombre') !!}
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
</div>
<div class="from-group">
    {!! Form::label('slug','Slug') !!}
    {!! Form::text('slug', null, ['class'=>'form-control']) !!}
</div>
@section('scripts')
    <script src="{{asset('vendor/srtingToSlug/jquery.stringToSlug.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            $("#name, #slug"). stringToSlug({
                callback: function(text){
                    $("#slug").val(text);
                }
            });
        });
    </script>
@endsection                    