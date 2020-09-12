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
<hr>
<h3>Permiso especial</h3>
<div class="from-group">
    <label>{!! Form::radio('special','all-access') !!} Acceso total</label>
    <label>{!! Form::radio('special','no-access') !!} Ningún acceso</label>
</div>
<hr>
<h3>Lista de permisos</h3>
<div class="form-group">
    <ul class="list-unstyled">
        @foreach ($permissions as $permission)
            <li>
                <label>
                    {!! Form::checkbox('permissions[]', $permission->id, null) !!}
                    {{ $permission->name}}
                    <em>({{ $permission->description ?: 'N/A'}})</em>
                </label>
            </li>
        @endforeach
    </ul>
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