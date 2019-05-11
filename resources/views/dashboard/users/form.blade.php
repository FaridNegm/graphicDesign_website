<div class="col-md-6 pull-left">
    {{ csrf_field() }}
    <span class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

            <span class="col-md-4">
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Username">

                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </span>
        </span>

    <span class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

            <span class="col-md-4">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </span>
        </span>

    <span class="form-group{{ $errors->has('admin') ? ' has-error' : '' }}">

            <span class="col-md-4">
                <select value="{{old('admin')}}" name="admin"  id="admin" class="form-control">
                    <option value="1" selected="selected">Admin</option>
                    <option value="0" >User</option>
                </select>

                @if ($errors->has('admin'))
                    <span class="help-block">
                        <strong>{{ $errors->first('admin') }}</strong>
                    </span>
                @endif
            </span>
        </span>

        <span class="form-group{{ $errors->has('facebook') ? ' has-error' : '' }}">

                <span class="col-md-4">
                    <input id="facebook" type="text" class="form-control" name="facebook" value="{{ old('facebook') }}" placeholder="Facebook">

                    @if ($errors->has('facebook'))
                        <span class="help-block">
                            <strong>{{ $errors->first('facebook') }}</strong>
                        </span>
                    @endif
                </span>
        </span>

        <span class="form-group{{ $errors->has('twitter') ? ' has-error' : '' }}">

            <span class="col-md-4">
                <input id="twitter" type="text" class="form-control" name="twitter" value="{{ old('twitter') }}" placeholder="Twitter">

                @if ($errors->has('twitter'))
                    <span class="help-block">
                        <strong>{{ $errors->first('twitter') }}</strong>
                    </span>
                @endif
            </span>
        </span>

        <span class="form-group{{ $errors->has('instegram') ? ' has-error' : '' }}">

                <span class="col-md-4">
                    <input id="instegram" type="text" class="form-control" name="instegram" value="{{ old('instegram') }}" placeholder="Instegram">

                    @if ($errors->has('instegram'))
                        <span class="help-block">
                            <strong>{{ $errors->first('instegram') }}</strong>
                        </span>
                    @endif
                </span>
        </span>
</div>{{--end div first col--}}

<div class="col-md-6 pull-right">{{--start div first col--}}

    <span class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

            <span class="col-md-4">
                <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                <span style="position: absolute;top: -35px;right: -360px;opacity: .5;font-size: 20px;cursor: pointer;"><i class="fa fa-eye eye"></i></span>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </span>
    </span>

    <span class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">

            <span class="col-md-4">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmed Password">
                <span style="position: absolute;top: -35px;right: -360px;opacity: .5;font-size: 20px;cursor: pointer;"><i class="fa fa-eye eye"></i></span>

            @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
            </span>
    </span>

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

    <span class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">

            <span class="col-md-4">
                <textarea id="description" class="form-control" name="description" placeholder="Description ......" rows="5">{{ old('description') }}</textarea>
                @if ($errors->has('description'))
                    <span class="help-block">
                        <strong>{{ $errors->first('description') }}</strong>
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
