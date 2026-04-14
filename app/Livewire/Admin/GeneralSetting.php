<?php

namespace App\Livewire\Admin;

use App\Models\Setting;
use Livewire\Component;

class GeneralSetting extends Component
{
    public string $company_name = '';
    public string $company_address = '';
    public string $company_email = '';
    public string $company_phone = '';
    public string $instagram = '';
    public string $facebook = '';

    public function mount(): void
    {
        $this->company_name = Setting::get('company_name', '') ?? '';
        $this->company_address = Setting::get('company_address', '') ?? '';
        $this->company_email = Setting::get('company_email', '') ?? '';
        $this->company_phone = Setting::get('company_phone', '') ?? '';
        $this->instagram = Setting::get('instagram', '') ?? '';
        $this->facebook = Setting::get('facebook', '') ?? '';
    }

    protected function rules(): array
    {
        return [
            'company_name' => 'required|string|max:255',
            'company_address' => 'nullable|string|max:500',
            'company_email' => 'nullable|email|max:255',
            'company_phone' => 'nullable|string|max:20',
            'instagram' => 'nullable|string|max:255',
            'facebook' => 'nullable|string|max:255',
        ];
    }

    public function save(): void
    {
        $this->validate();

        Setting::set('company_name', $this->company_name);
        Setting::set('company_address', $this->company_address);
        Setting::set('company_email', $this->company_email);
        Setting::set('company_phone', $this->company_phone);
        Setting::set('instagram', $this->instagram);
        Setting::set('facebook', $this->facebook);

        $this->dispatch('notify', message: 'Pengaturan berhasil disimpan!');
    }

    public function render()
    {
        return view('livewire.admin.general-setting')
            ->layout('layouts.admin')
            ->title('Pengaturan Umum');
    }
}
