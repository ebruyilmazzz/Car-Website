<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|max:2000',
        ]);

        // Mail gönderme işlemi (opsiyonel)
        Mail::raw("Gönderen: {$validated['name']} \n\nMesaj:\n{$validated['message']}", function ($mail) use ($validated) {
            $mail->to('admin@speedzone.com')
                 ->subject("Yeni İletişim Formu Mesajı")
                 ->from($validated['email']);
        });

        return back()->with('success', 'Mesajınız başarıyla gönderildi!');
    }
}
?>

