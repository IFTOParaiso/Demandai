<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NovoEditalDisponivel extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request,$value)
    {
        $this->request = $request;
        $this->value = $value;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.edital',['nome'=>$this->value['name'],'email'=>$this->value['email'],'title'=>$this->request['title'],'descricao'=>$this->request['description'],'data'=>$this->request['date_closure'],'link'=>$this->request['link']]);
    }
}
