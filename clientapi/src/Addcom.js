import React, { useState } from 'react';
import axios from 'axios';

export default function Addcom() {
    const [titre, setTitre] = useState('');
    const [categorie, setCategorie] = useState('');
    const [contenu, setContenu] = useState('');
    const [imageFile, setImageFile] = useState(null); // Changement : On stocke le fichier
    const [prix, setPrix] = useState('');
    const [message, setMessage] = useState('');

    const ajouterArticle = () => {
        if (titre === '' || categorie === '' || contenu === '' || prix === '' || !imageFile) {
            setMessage('Veuillez remplir tous les champs obligatoires et choisir une image.');
            return;
        }

        // Utilisation de FormData pour l'envoi de fichier
        const formData = new FormData();
        formData.append('titre', titre);
        formData.append('categorie', categorie);
        formData.append('contenu', contenu);
        formData.append('prix', prix);
        formData.append('image', imageFile);

        const apiUrl = process.env.REACT_APP_API_URL || 'http://localhost:8000/api';
        axios.post(`${apiUrl}/articles`, formData, {
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
            .then(response => {
                setMessage(response.data.message);
                setTitre('');
                setCategorie('');
                setContenu('');
                setPrix('');
                setImageFile(null);
                // On vide l'input file manuellement
                document.getElementById('file-input').value = "";
            })
            .catch(error => {
                console.error("Erreur lors de l'ajout :", error);
                setMessage('Une erreur est survenue lors de l\'ajout.');
            });
    };

    return (
        <div style={{ padding: '20px', border: '1px solid #d4af37', marginTop: '20px', borderRadius: '8px', backgroundColor: '#fff', boxShadow: '0 4px 6px rgba(0,0,0,0.1)' }}>
            <h2 style={{ fontFamily: 'serif', color: '#1a1a1a', marginBottom: '20px' }}>Ajouter un nouveau produit (API + Upload)</h2>
            <div style={{ display: 'flex', flexDirection: 'column', gap: '15px', maxWidth: '500px' }}>
                <input type="text" placeholder="Titre du produit *" value={titre} onChange={(e) => setTitre(e.target.value)} style={{ padding: '10px', border: '1px solid #eee', borderRadius: '4px' }} />
                <input type="text" placeholder="Catégorie (Visage, Cheveux...) *" value={categorie} onChange={(e) => setCategorie(e.target.value)} style={{ padding: '10px', border: '1px solid #eee', borderRadius: '4px' }} />
                <input type="number" placeholder="Prix (DH) *" value={prix} onChange={(e) => setPrix(e.target.value)} style={{ padding: '10px', border: '1px solid #eee', borderRadius: '4px' }} />

                <div style={{ display: 'flex', flexDirection: 'column', gap: '5px' }}>
                    <label style={{ fontSize: '12px', fontWeight: 'bold', color: '#666' }}>IMAGE DU PRODUIT :</label>
                    <input id="file-input" type="file" accept="image/*" onChange={(e) => setImageFile(e.target.files[0])} style={{ padding: '5px', border: '1px dashed #d4af37', borderRadius: '4px' }} />
                </div>

                <textarea placeholder="Description du produit *" value={contenu} onChange={(e) => setContenu(e.target.value)} style={{ padding: '10px', border: '1px solid #eee', borderRadius: '4px', minHeight: '100px' }} />

                <button onClick={ajouterArticle} style={{ padding: '12px', backgroundColor: '#1a1a1a', color: '#fff', border: 'none', cursor: 'pointer', fontWeight: 'bold', textTransform: 'uppercase', letterSpacing: '1px' }}>
                    Télécharger et Enregistrer
                </button>
            </div>
            {message && <p style={{ color: '#d4af37', fontWeight: 'bold', marginTop: '15px', textAlign: 'center' }}>{message}</p>}
        </div>
    );
}
