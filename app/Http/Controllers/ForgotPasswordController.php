<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;

    /**
     * Display the form to request a password reset link.
     *
     * @return \Illuminate\View\View
     */
    public function showLinkRequestForm()
    {
        return view('password.edit');
    }

    /**
     * Send a reset link to the given user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = $this->broker()->sendResetLink(
            $request->only('email')
        );

        return $status == $this->broker()->RESET_LINK_SENT
            ? back()->with(['status' => trans($status)])
            : back()->withErrors(['email' => trans($status)]);
    }
}
