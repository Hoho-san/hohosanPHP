document
    .querySelectorAll(".certificate .myCertificate .certificate_title img")
    .forEach(image => {
        image.onclick = () => {
            document.querySelector(".popup-image").style.display = "block";
            document.querySelector(".popup-image img").src =
                image.getAttribute("src");
        };
    });

document.addEventListener("DOMContentLoaded", () => {
    const popupImageSpan = document.querySelector(".popup-image span");
    if (popupImageSpan) {
        popupImageSpan.addEventListener("click", () => {
            const popupImage = document.querySelector(".popup-image");
            if (popupImage) {
                popupImage.style.display = "none";
            }
        });
    }
});

function downloadCSV() {
    // Create a link element
    var link = document.createElement("a");
    link.style.display = "none";

    // Set the CSV file URL
    link.href = "assets/resume/resume.docx";
    link.download = "Resume - Jojo Javier.docx";

    // Add the link to the document body
    document.body.appendChild(link);

    // Trigger the click event
    link.click();

    // Remove the link from the document body
    document.body.removeChild(link);
}
