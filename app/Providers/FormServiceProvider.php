<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

// Enable form components
use Form;

// Form Service Provider
class FormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Custom components
        Form::component('bsText', 'components.form.text', ['name', 'value' => null, 'attributes' => []]);
        Form::component('bsTextArea', 'components.form.textarea', ['name', 'value' => null, 'attributes' => []]);
        Form::component('bsSubmit', 'components.form.submit', ['value' => 'Submit', 'attributes' => []]);

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
