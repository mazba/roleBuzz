<div class="col-md-7 col-md-offset-2">
        <div class="form-group">
                {{ Form::label('parent_id', __('Parent Menu')) }}
                {{ Form::select('parent_id',$menu,null,['placeholder'=>__('None'),'class'=>'form-control']) }}
        </div>
        <div class="form-group">
                {{ Form::label('title', __('Title')) }}
                {{ Form::text('title',null,['class'=>'form-control']) }}
                @if($errors->has('title'))
                        <label id="title-error" class="error" for="title">{{ $errors->first('title') }}</label>
                @endif
        </div>
        <div class="form-group">
                {{ Form::label('alt_title', __('Alternative Title')) }}
                {{ Form::text('alt_title',null,['class'=>'form-control']) }}
                @if($errors->has('alt_title'))
                        <label id="att-title-error" class="error" for="alt_title">{{ $errors->first('alt_title') }}</label>
                @endif
        </div>
        <div class="form-group">
                {{ Form::label('description', __('Description')) }}
                {{ Form::textarea('description',null,['class'=>'form-control','rows'=>2]) }}
                @if($errors->has('alt_title'))
                        <label class="error" for="description">{{ $errors->first('description') }}</label>
                @endif
        </div>
        <div class="form-group">
                {{ Form::label('icon', __('Icon')) }}
                {{ Form::text('icon',null,['class'=>'form-control']) }}
                @if($errors->has('icon'))
                        <label id="icon-error" class="error" for="icon">{{ $errors->first('icon') }}</label>
                @endif
        </div>
        <div class="form-group">
                {{ Form::label('status', __('Is Active')) }}
                {{ Form::checkbox('status',1,['class'=>'form-control','value'=>1]) }}
                @if($errors->has('status'))
                        <label id="status-error" class="error" for="status">{{ $errors->first('status') }}</label>
                @endif
        </div>
        <div class="form-group text-center">
                {{ Form::button(isset($submit)?$submit:__('Submit'),['type'=>'submit','class'=>'btn btn-info waves-effect waves-light w-md m-b-5'])}}
        </div>
</div>