<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Skip when the settings table doesn't exist yet (e.g. while running migrations on a fresh database)
        try {
            $general = \Schema::hasTable('generals') ? general() : null;
        } catch (\Throwable $e) {
            $general = null;
        }
        if (!$general) {
            return;
        }

        \Config::set("services.facebook.client_id", $general->fb_app_id);
        \Config::set("services.facebook.client_secret", $general->fb_app_secret);
        \Config::set("services.facebook.redirect", $general->fb_app_secret);

        \Config::set("services.google.client_id", $general->google_client_id);
        \Config::set("services.google.client_secret", $general->google_client_secret);
        \Config::set("services.google.redirect", $general->google_client_redirect_url);

        // Mail settings come from Admin > Mail Setting. SMTP is used unless another
        // supported mailer is chosen ("mail" is not a Laravel transport, so it falls back to SMTP).
        $mailer = in_array($general->mail_driver, ['sendmail', 'mailgun']) ? $general->mail_driver : 'smtp';
        \Config::set("mail.default", $mailer);
        \Config::set("mail.mailers.smtp.transport", 'smtp');
        \Config::set("mail.mailers.smtp.host", $general->mail_host);
        \Config::set("mail.mailers.smtp.port", $general->mail_port);
        \Config::set("mail.mailers.smtp.encryption", $general->mail_encryption ? strtolower($general->mail_encryption) : null);
        \Config::set("mail.mailers.smtp.username", $general->mail_username);
        \Config::set("mail.mailers.smtp.password", $general->mail_password);
        \Config::set("mail.from.address", $general->mail_from_address ?: $general->mail_username);
        \Config::set("mail.from.name", $general->mail_from_name ?: $general->title);
    }
}
