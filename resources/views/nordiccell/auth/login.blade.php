@extends('nordiccell.layouts.app')
@section( 'title', 'Login')
@section('content')
    <div class="content-wrapper">

        <div class="post-header">

            <header class="hero hero--size-large hero--align-left">


                <div class="hero__text-wrap ">

                    <h1 class="hero__title">Account</h1>


                </div>


            </header>
        </div>


        <div class="content-main">

            <main>


                <article id="article-9" class="post-wrapper post-9 page type-page status-publish hentry">


                    <div class="post-content">

                        <div class="woocommerce">
                            <div class="woocommerce-notices-wrapper"></div>
                            <div class="u-columns col2-set" id="customer_login">

                                <div class="u-column1 col-1">

                                    <h2>Login</h2>

                                    <form action="{{ route('authenticate') }}" class="woocommerce-form woocommerce-form-login login" method="post">
                                        @csrf
                                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                            <label for="email">Email&nbsp;<span class="required">*</span></label>
                                            <input type="text"
                                                   class="woocommerce-Input woocommerce-Input--text input-text"
                                                   name="email" id="email" autocomplete="email" value=""></p>
                                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                            <label for="password">Password&nbsp;<span class="required">*</span></label>
                                            <input class="woocommerce-Input woocommerce-Input--text input-text"
                                                   type="password" name="password" id="password"
                                                   autocomplete="current-password">
                                        </p>


                                        <p class="form-row">
                                            <button type="submit" class="cta" name="login" value="Log in">Log in
                                            </button>
                                    </form>
                                </div>

                                <div class="u-column2 col-2 register-section">

                                    <h2>Register</h2>
                                    <p>To use the Invitrotech shop, you need to be registered. Please create a user, and
                                        we'll get back to you as soon as possible.</p>
                                    <a href="{{route('register')}}" class="cta">Create account</a>
                                </div>

                            </div>

                        </div>

                    </div>
                </article>
            </main>
        </div>
    </div>
@endsection
