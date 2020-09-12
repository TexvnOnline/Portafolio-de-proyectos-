<div class="from-group">
    {!! Form::label('name','Nombre') !!}
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
</div>
<div class="from-group">
    {!! Form::label('slug','Slug') !!}
    {!! Form::text('slug', null, ['class'=>'form-control']) !!}
</div>
<div class="from-group">
    {!! Form::label('description','Descripción:') !!}
    {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
</div>
<div class="from-group">
    {!! Form::label('imagen','Imagen de categoría:') !!}
    {!! Form::file('imagen') !!}
    <small class="form-text text-muted">
        Solo archivos de imágenes de dimensiones 175x50 px.
    </small>
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