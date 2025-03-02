<?php
namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class UsersExport implements FromCollection, WithHeadings, WithMapping
{
    public function collection()
    {
        return User::with(['state', 'city'])->get();
    }

    public function headings(): array
    {
        return [
            'ID', 'First Name', 'Last Name', 'Email', 'Contact Number', 
            'Postcode', 'Gender', 'State', 'City', 'Roles', 'Hobbies'
        ];
    }

    public function map($user): array
    {
        return [
            $user->id,
            $user->first_name,
            $user->last_name,
            $user->email,
            $user->contact_number,
            $user->postcode,
            ucfirst($user->gender),
            $user->state->name ?? 'N/A',
            $user->city->name ?? 'N/A',
            implode(', ', json_decode($user->roles, true) ?? []),
            implode(', ', json_decode($user->hobbies, true) ?? [])
        ];
    }
}
