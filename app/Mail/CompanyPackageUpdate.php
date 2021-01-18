<?php

namespace App\Mail;

use App\Models\Setting;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CompanyPackageUpdate extends BaseMail
{
    public $data;
    public $setting;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        parent::__construct();
        $this->setting = Setting::first();
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->setting->email, $this->setting->name)
            ->subject('Company package updated')
            ->view('emails.site.company_package_update')
            ->with(['logo_image_url' => $this->setting->logo_image_url])
            ->with($this->data);
    }
}
