<!-- Classroom Name Field -->
<div class="form-group">
    {!! Form::label('classroom_name', 'Classroom Name:') !!}
    <p>{{ $classroom->classroom_name }}</p>
</div>

<!-- Classroom Code Field -->
<div class="form-group">
    {!! Form::label('classroom_code', 'Classroom Code:') !!}
    <p>{{ $classroom->classroom_code }}</p>
</div>

<!-- Classroom Description Field -->
<div class="form-group">
    {!! Form::label('classroom_description', 'Classroom Description:') !!}
    <p>{{ $classroom->classroom_description }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $classroom->status }}</p>
</div>

