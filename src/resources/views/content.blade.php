@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('content')
<div class="contact-form">
    <h2 class="contact-form__heading">Contact</h2>
    <div class="content-form__inner">
        <form action="confirm" method="post">
            @csrf
            <div class="contact-form_group-name">
                <label class="contact-form__label" for="name">お名前
                    <span class="contact-form__required">※</span>
                </label>
                <div class="contact-form__name-inputs">
                    <input class="contact-form__name-input" type="text" name="first_name" id="name" value="{{ old('first_name') }}" placeholder="例：山田">
                    <input class="contact-form__name-input" type="text" name="last_name" id="name" value="{{ old('last_name') }}" placeholder="例：太郎">
                </div>
                <div class="contact-form__error-message">
                    @if ($error->has('first_name'))
                    <p class="contact-form__error-message-first_name">{{ $error->first('first_name') }}</p>
                    @endif
                    @if ($error->has('last_name'))
                    <p class="contact-form__error-message-last_name">{{ $error->first('last_name') }}</p>
                    @endif
                </div>
            </div>

            <div class="contact-form__group">
                <label class="contact-form__label">
                    性別<span class="contact-form__required">※</span>
                </label>
                <div class="contact-form__gender-inputs">
                    <div class="contact-form__gender-option">
                        <label class="contact-form__gender-label">
                            <input class="contact-form__gender-input" name="gender" type="radio" id="male" value="1" {{
                old('gender')==1 || old('gender')==null ? 'checked' : '' }}>
                            <span class="contact-form__gender-text">男性</span>
                        </label>
                    </div>
                    <div class="contact-form__gender-option">
                        <label class="contact-form__gender-label">
                            <input class="contact-form__gender-input" type="radio" name="gender" id="female" value="2" {{
                old('gender')==2 ? 'checked' : '' }}>
                            <span class="contact-form__gender-text">女性</span>
                        </label>
                    </div>
                    <div class="contact-form__gender-option">
                        <label class="contact-form__gender-label" for="other">
                            <input class="contact-form__gender-input" type="radio" name="gender" id="other" value="3" {{
                old('gender')==3 ? 'checked' : '' }}>
                            <span class="contact-form__gender-text">その他</span>
                        </label>
                    </div>
                </div>
                <p class="contact-form__error-message">
                    @error('gender')
                    {{ $message }}
                    @enderror
                </p>
            </div>
        </form>
    </div>
</div>