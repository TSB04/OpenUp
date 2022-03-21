


document.addEventListener('DOMContentLoaded', function(){ 
    document.getElementById("downloadPdf")
    .addEventListener("click", ()=>{

    // Get the element.
    var element = document.getElementById('pdf_container');

    // Generate the PDF.
    html2pdf().from(element).set({
        margin: 1,
        filename: 'test.pdf',
        html2canvas: { scale: 2 },
        jsPDF: {orientation: 'portrait', unit: 'in', format: 'letter', compressPDF: true}
    }).save();
})


}, false);

