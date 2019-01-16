@extends('head')

@section('title', 'Create A New Password')

@section('content')
<section id="content">
  
  <div class="container">
    <div class="row">
      <div class="span12"><div class="row">
          <div class="span12">
            <div class="aligncenter">
                <div class="row">
                    <div class="span4"></div>
                    <div class="span4">
                        <div class="pricing-box-plain">
                            <div>
                                <h3 class="panel-title">Create New Password</h3>
                            </div>
                            <div>
                <form accept-charset="UTF-8" role="form" method="post" action="{{ route('auth.password.reset.attempt', $code) }}">
                <fieldset>
                    <div class="form-group  {{ ($errors->has('password')) ? 'has-error' : '' }}">
                        <input class="form-control" placeholder="Password" name="password" type="password" value="">
                        {!! ($errors->has('password') ? $errors->first('password', '<p class="text-danger">:message</p>') : '') !!}
                    </div>
                    <div class="form-group  {{ ($errors->has('password_confirmation')) ? 'has-error' : '' }}">
                        <input class="form-control" placeholder="Confirm Password" name="password_confirmation" type="password" value="">
                        {!! ($errors->has('password_confirmation') ? $errors->first('password_confirmation', '<p class="text-danger">:message</p>') : '') !!}
                    </div>
                    <input name="_token" value="{{ csrf_token() }}" type="hidden">
                    <input class="btn btn-lg btn-primary btn-block" type="submit" value="Save">
                </fieldset>
                </form>
                  </div>
                        </div>
                    </div>
                    <div class="span4"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

</section>
@stop