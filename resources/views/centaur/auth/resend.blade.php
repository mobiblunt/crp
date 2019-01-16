@extends('head')

@section('title', 'Resend Activation Instructions')

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
                                <h3 class="panel-title">Login</h3>
                            </div>
                            <div>
                <form accept-charset="UTF-8" role="form" method="post" action="{{ route('auth.activation.resend') }}">
                <fieldset>
                    <div class="form-group {{ ($errors->has('email')) ? 'has-error' : '' }}">
                        <input class="form-control" placeholder="E-mail" name="email" type="text" value="{{ old('email') }}">
                        {!! ($errors->has('email') ? $errors->first('email', '<p class="text-danger">:message</p>') : '') !!}
                    </div>
                    <input name="_token" value="{{ csrf_token() }}" type="hidden">
                    <input class="btn btn-lg btn-primary btn-block" type="submit" value="Send">
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