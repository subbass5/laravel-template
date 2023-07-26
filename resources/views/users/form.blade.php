
<div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="col-md-2 control-label">Name</label>
    <div class="col-md-4">
        <input class="form-control" name="name" type="text" id="name" value="{{ old('name', optional($users)->name) }}" minlength="1" maxlength="255" required="true" placeholder="Enter name here...">
        {!! $errors->first('name', '<p class="form-text text-muted">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('email') ? 'has-error' : '' }}">
    <label for="email" class="col-md-2 control-label">Email</label>
    <div class="col-md-4">
        <input class="form-control" name="email" type="text" id="email" value="{{ old('email', optional($users)->email) }}" minlength="1" maxlength="255" required="true" placeholder="Enter email here...">
        {!! $errors->first('email', '<p class="form-text text-muted">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('email_verified_at') ? 'has-error' : '' }}">
    <label for="email_verified_at" class="col-md-2 control-label">Email Verified At</label>
    <div class="col-md-4">
        <input class="form-control" name="email_verified_at" type="text" id="email_verified_at" value="{{ old('email_verified_at', optional($users)->email_verified_at) }}" placeholder="Enter email verified at here...">
        {!! $errors->first('email_verified_at', '<p class="form-text text-muted">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('permission') ? 'has-error' : '' }}">
    <label for="permission" class="col-md-2 control-label">Permission</label>
    <div class="col-md-4">
        <input class="form-control" name="permission" type="number" id="permission" value="{{ old('permission', optional($users)->permission) }}" min="-2147483648" max="2147483647" placeholder="Enter permission here...">
        {!! $errors->first('permission', '<p class="form-text text-muted">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('phone') ? 'has-error' : '' }}">
    <label for="phone" class="col-md-2 control-label">Phone</label>
    <div class="col-md-4">
        <input class="form-control" name="phone" type="text" id="phone" value="{{ old('phone', optional($users)->phone) }}" maxlength="255" placeholder="Enter phone here...">
        {!! $errors->first('phone', '<p class="form-text text-muted">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('lineid') ? 'has-error' : '' }}">
    <label for="lineid" class="col-md-2 control-label">Lineid</label>
    <div class="col-md-4">
        <input class="form-control" name="lineid" type="text" id="lineid" value="{{ old('lineid', optional($users)->lineid) }}" maxlength="255" placeholder="Enter lineid here...">
        {!! $errors->first('lineid', '<p class="form-text text-muted">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('password') ? 'has-error' : '' }}">
    <label for="password" class="col-md-2 control-label">Password</label>
    <div class="col-md-4">
        <input class="form-control" name="password" type="text" id="password" value="{{ old('password', optional($users)->password) }}" minlength="1" maxlength="255" required="true" placeholder="Enter password here...">
        {!! $errors->first('password', '<p class="form-text text-muted">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('remember_token') ? 'has-error' : '' }}">
    <label for="remember_token" class="col-md-2 control-label">Remember Token</label>
    <div class="col-md-4">
        <input class="form-control" name="remember_token" type="text" id="remember_token" value="{{ old('remember_token', optional($users)->remember_token) }}" maxlength="100" placeholder="Enter remember token here...">
        {!! $errors->first('remember_token', '<p class="form-text text-muted">:message</p>') !!}
    </div>
</div>

