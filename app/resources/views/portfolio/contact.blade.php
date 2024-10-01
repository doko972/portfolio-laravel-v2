@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <section class="contact-section">
        <div class="contact-container">
            <div class="contact-header">
                <span class="scroll-icon"></span>
                <h1>Contact</h1>
                <p>Je suis actuellement disponible</p>
            </div>

            <button class="message-button">Envoyez-moi un message</button>

            <form action="{{ route('contact.send') }}" method="POST" class="contact-form">
                @csrf
                <div class="form-group">
                    <label for="name">Votre nom *</label>
                    <input type="text" id="name" name="name" placeholder="Entrez votre nom" required>
                </div>

                <div class="form-group">
                    <label for="email">Votre email *</label>
                    <input type="email" id="email" name="email" placeholder="Entrez votre email" required>
                </div>

                <div class="form-group">
                    <label for="message">Votre message *</label>
                    <textarea id="message" name="message" rows="5" placeholder="Entrez vos besoins" required></textarea>
                </div>

                <button type="submit" class="send-button">Envoyer un message <span class="send-icon"></span></button>
            </form>
        </div>
    </section>
@endsection
