import React, { useEffect, useState } from 'react';
import axios from 'axios';

export default function Filcomp() {
    const [query, setQuery] = useState('');
    const [articles, setArticles] = useState([]);

    useEffect(() => {
        if (query !== '') {
            axios.get(`http://127.0.0.1:8000/api/filter?p=${query}`)
                .then(response => {
                    setArticles(response.data);
                })
                .catch(error => {
                    console.error("Erreur lors de la récupération :", error);
                });
        } else {
            // Si vide, on peut soit vider, soit tout afficher. Ici on vide comme demandé.
            setArticles([]);
        }
    }, [query]);

    return (
        <div style={{ padding: '20px', border: '1px solid #ddd', marginBottom: '20px' }}>
            <h2>Recherche d'articles (Filcomp)</h2>
            <input
                type="text"
                placeholder="Rechercher par titre..."
                value={query}
                onChange={(e) => setQuery(e.target.value)}
                style={{ padding: '8px', width: '100%', marginBottom: '10px' }}
            />
            <ul>
                {articles.map(article => (
                    <li key={article.id}>
                        <strong>{article.titre}</strong> - {article.categorie}
                    </li>
                ))}
            </ul>
        </div>
    );
}
