import React, { useEffect, useState } from 'react';
import axios from 'axios';

export default function Filcomp() {
    const [query, setQuery] = useState('');
    const [articles, setArticles] = useState([]);

    useEffect(() => {
        if (query !== '') {
            const apiUrl = process.env.REACT_APP_API_URL || 'http://localhost:8000/api';
            axios.get(`${apiUrl}/filter?p=${query}`)
                .then(response => {
                    setArticles(response.data);
                })
                .catch(error => {
                    console.error("Erreur lors du filtrage :", error);
                });
        } else {
            setArticles([]);
        }
    }, [query]);

    return (
        <div style={{ padding: '20px', border: '1px solid #d4af37', borderRadius: '8px', backgroundColor: '#fff', boxShadow: '0 4px 6px rgba(0,0,0,0.1)' }}>
            <h2 style={{ fontFamily: 'serif', color: '#1a1a1a', marginBottom: '20px' }}>Inventaire des produits (API)</h2>
            <input
                type="text"
                placeholder="Rechercher dans le stock..."
                onChange={(e) => setQuery(e.target.value)}
                value={query}
                style={{ padding: '12px', width: '100%', maxWidth: '450px', border: '1px solid #eee', borderRadius: '25px', marginBottom: '30px', outline: 'none', boxShadow: 'inset 0 2px 4px rgba(0,0,0,0.05)' }}
            />

            {articles.length > 0 ? (
                <div style={{ overflowX: 'auto' }}>
                    <table style={{ width: '100%', borderCollapse: 'collapse', marginTop: '10px' }}>
                        <thead>
                            <tr style={{ backgroundColor: '#1a1a1a', color: '#fff', textAlign: 'left' }}>
                                <th style={{ padding: '12px', borderBottom: '2px solid #d4af37' }}>Visuel</th>
                                <th style={{ padding: '12px', borderBottom: '2px solid #d4af37' }}>Nom du Produit</th>
                                <th style={{ padding: '12px', borderBottom: '2px solid #d4af37' }}>Catégorie</th>
                                <th style={{ padding: '12px', borderBottom: '2px solid #d4af37' }}>Prix</th>
                            </tr>
                        </thead>
                        <tbody>
                            {articles.map((article) => (
                                <tr key={article.id} style={{ borderBottom: '1px solid #eee' }}>
                                    <td style={{ padding: '10px' }}>
                                        <img src={article.image} alt={article.titre} style={{ width: '50px', height: '50px', objectFit: 'cover', borderRadius: '50%', border: '1px solid #d4af37' }} />
                                    </td>
                                    <td style={{ padding: '10px', fontWeight: 'bold' }}>{article.titre}</td>
                                    <td style={{ padding: '10px' }}>
                                        <span style={{ fontSize: '0.8rem', background: '#f5f5f5', padding: '3px 8px', borderRadius: '10px' }}>{article.categorie}</span>
                                    </td>
                                    <td style={{ padding: '10px', color: '#d4af37', fontWeight: 'bold' }}>{parseFloat(article.prix).toFixed(2)} DH</td>
                                </tr>
                            ))}
                        </tbody>
                    </table>
                </div>
            ) : query !== '' ? (
                <p style={{ fontStyle: 'italic', color: '#999' }}>Aucun produit ne correspond à votre recherche.</p>
            ) : (
                <p style={{ fontStyle: 'italic', color: '#999' }}>Saisissez un mot-clé pour consulter le tableau...</p>
            )}
        </div>
    );
}
