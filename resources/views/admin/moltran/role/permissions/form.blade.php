<div class="form-group col-md-4">
    {{ Form::label('parent_id', __('Parent')) }}
    {{ Form::select('parent_id', $users,null,['placeholder'=>__('None'),'class'=>'form-control']) }}
</div>
<div class="form-group col-md-8">
    {{ Form::label('name', __('Group Name')) }}
    {{ Form::text('name',null,['class'=>'form-control']) }}
    @if($errors->has('name'))
        <label id="name-error" class="error" for="name">{{ $errors->first('name') }}</label>
    @endif
</div>
<div class="form-group">
    {{ Form::button(isset($submit)?$submit:__('Submit'),['type'=>'submit','class'=>'pull-right btn btn-info waves-effect waves-light w-md m-b-5'])}}
</div>