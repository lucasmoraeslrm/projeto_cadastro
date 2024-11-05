window.onload = function() {
  const ui = SwaggerUIBundle({
    url: "/projetocadastro/swagger/swagger.json", // Caminho completo para o JSON
    dom_id: '#swagger-ui',
    presets: [
      SwaggerUIBundle.presets.apis,
      SwaggerUIStandalonePreset
    ],
    layout: "StandaloneLayout"
  });
  window.ui = ui;
}
