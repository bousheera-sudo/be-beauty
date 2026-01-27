import React, { useState } from 'react';
import axios from 'axios';

export default function Addcom() {
    const [titre, setTitre] = useState('');
    const [categorie, setCategorie] = useState('');
    const [contenu, setContenu] = useState('');
    const [message, setMessage] = useState('');

    const ajouterArticle = () => {
        if(!titre || !categorie || !contenu) {
            setMessage("Veuillez remplir tous les champs.");
            return;
        }

        // Note: L'image est gérée en placeholder ici pour simplifier (JSON).
        // Si vous voulez uploader une vraie image vers Laravel/Cloudinary depuis React,
        // il faudrait utiliser FormData et un input type="file".
        // Pour cet exercice, on envoie une URL placeholder.
        
        axios.post('http://127.0.0.1:8000/api/articles', {
            titre,
            categorie,
            contenu,
            image: 'https://via.placeholder.com/300' // Image par défaut
        })
        .then(response => {
            setMessage(response.data.message);
            setTitre('');
            setCategorie('');
            setContenu('');
        })
        .catch(error => {
            console.error("Erreur ajout :", error);
            setMessage("Erreur lors de l'ajout.");
        });
    };

    return (
        <div style={{ padding: '20px', border: '1px solid #ddd' }}>
            <h2>Ajouter un Article (Addcom)</h2>
            <div style={{ marginBottom: '10px' }}>
                <input type="text" placeholder="Titre" value={titre} onChange={e => setTitre(e.target.value)} style={{ marginRight: '10px' }} />
                <input type="text" placeholder="Catégorie" value={categorie} onChange={e => setCategorie(e.target.value)} style={{ marginRight: '10px' }} />
            </div>
            <div style={{ marginBottom: '10px' }}>
                <textarea placeholder="Description (Contenu)" value={contenu} onChange={e => setContenu(e.target.value)} style={{ width: '100%' }} />
            </div>
            <button onClick={ajouterArticle} style={{ padding: '10px 20px', background: 'gold', border: 'none', cursor: 'pointer' }}>Ajouter</button>
            {message && <p style={{ color: 'green', marginTop: '10px' }}>{message}</p>}
        </div>
    );
}
