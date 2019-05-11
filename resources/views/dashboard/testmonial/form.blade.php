<div class="col-md-6 pull-left">
    {{ csrf_field() }}
    <span class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

            <span class="col-md-4">
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Title...">

                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </span>
        </span>

    <span class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">

            <span class="col-md-4">
                <textarea id="body" class="form-control" name="body" rows="5" placeholder="Description ......">{{ old('body') }}</textarea>
                @if ($errors->has('body'))
                    <span class="help-block">
                        <strong>{{ $errors->first('body') }}</strong>
                    </span>
                @endif
            </span>
    </span>

</div>{{--end div first col--}}

<div class="col-md-6 pull-right">{{--start div first col--}}

    <span class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">

            <span class="col-md-4">
                <input id="image" type="file" class="form-control" name="image" value="{{ old('image') }}" style="height: 38px; line-height: 18px;">

                @if ($errors->has('image'))
                    <span class="help-block">
                        <strong>{{ $errors->first('image') }}</strong>
                    </span>
                @endif
            </span>
    </span>

    <span class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">

            <span class="col-md-4">
                <select name="status"  id="status" class="form-control">
                    <option value="1" selected="selected">Active</option>
                    <option value="0" >Not Active</option>
                </select>

                @if ($errors->has('status'))
                    <span class="help-block">
                        <strong>{{ $errors->first('status') }}</strong>
                    </span>
                @endif
            </span>
    </span>
</div>{{--end div first col--}}

<span class="form-group">
        <span class="col-md-4">
            <input type="submit" Value="Register" class="form-control btn btn-primary"  style="width:60%;display:block;margin:0px auto 50px auto;height:45px;background-color: #24a2b7;border: 0px;"/>
        </span>
    </span>
