document.addEventListener("DOMContentLoaded", function () {
    document.body.style.visibility = "visible"; // Afficher le contenu
    
    // Ajouter du line-height 120% aux br
    const brElements = document.querySelectorAll("br");
    brElements.forEach(br => {
      const span = document.createElement("span");
      span.style.display = "block";
      span.style.lineHeight = "120%";
      br.parentNode.insertBefore(span, br);
      span.appendChild(br); // Le br devient enfant du span avec le line-height 120%
    });
  });
  
  function resizeTextToFit() {
    const title = document.getElementById("adaptive-title");
    const paragraph = document.getElementById("adaptative-paragraphe");
  
    // Set the container heights
    const containerHeightTitle = 24; // Height for h1
    const containerHeightParagraph = 96; // Height for p
  
    // Adjust the h1
    let fontSizeTitle = 34; // Initial font size for h1
    title.style.fontSize = fontSizeTitle + "px";
  
    while (title.scrollHeight > containerHeightTitle) {
      fontSizeTitle -= 1;
      title.style.fontSize = fontSizeTitle + "px";
      if (fontSizeTitle < 10) break; // Minimum font size limit
    }
  
    // Adjust the paragraph
    let fontSizeParagraph = 18; // Initial font size for p
    paragraph.style.fontSize = fontSizeParagraph + "px";
  
    while (paragraph.scrollHeight > containerHeightParagraph) {
      fontSizeParagraph -= 1;
      paragraph.style.fontSize = fontSizeParagraph + "px";
      if (fontSizeParagraph < 10) break; // Minimum font size limit
    }
  }
  
  window.onload = resizeTextToFit;
  window.onresize = resizeTextToFit; // Adjust on resize
  