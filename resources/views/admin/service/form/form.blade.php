<div class="from-group">
    {!! Form::label('name','Nombre') !!}
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
</div>
<div class="from-group">
    {!! Form::label('slug','Slug') !!}
    {!! Form::text('slug', null, ['class'=>'form-control']) !!}
</div>
<div class="from-group">
    {!! Form::label('shortDescription','Descripción corta:') !!}
    {!! Form::textarea('shortDescription', null, ['class'=>'form-control']) !!}
</div>
<div class="from-group">
    {!! Form::label('longDescription','Descripción larga:') !!}
    {!! Form::textarea('longDescription', null, ['class'=>'form-control']) !!}
</div>
<div class="from-group">
    {!! Form::label('icon','Icono:') !!}
    {!! Form::text('icon', null, ['class'=>'form-control']) !!}
</div>
<div class="from-group">
    {!! Form::label('image','Imagen de portada:') !!}
    {!! Form::file('image') !!}
    <small class="form-text text-muted">
        Solo archivos de imágenes de dimensiones 400x250 px.
    </small>
</div>
<div class="form-group">
    <label for="imagenes">Anadir Imagenes</label>
    <input type="file" class="form-control-file" name="imagenes[]"id="imagenes[]" multiple accept="image/*">
    <small class="form-text text-muted">
        Solo archivos de imágenes de dimensiones 710x300 px.
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