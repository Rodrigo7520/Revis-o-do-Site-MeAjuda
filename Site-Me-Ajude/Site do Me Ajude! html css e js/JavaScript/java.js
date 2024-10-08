/*(const translations = {
    pt: {
        title: "Bem-vindo ao Me Ajuda!",
        description: "Esta é uma ONG que ajuda pessoas em necessidade."
    },
    en: {
        title: "Welcome to Me Ajuda!",
        description: "This is an NGO that helps people in need."
    },
    es: {
        title: "¡Bienvenido a Me Ajuda!",
        description: "Esta es una ONG que ayuda a personas necesitadas."
    }
};

document.getElementById('languageSwitcher').addEventListener('change', function() {
    const selectedLanguage = this.value;
    changeLanguage(selectedLanguage);
});

function changeLanguage(language) {
    document.querySelectorAll('[data-lang]').forEach(element => {
        const key = element.getAttribute('data-lang');
        element.textContent = translations[language][key];
    });
}


// OK --------3. CEP - Para completar os campos: Rua, Bairro, Cidade e Estado (através da API ViaCep)
const apresentaDados = (resultado) => {
    for (let campo in resultado) {
        if (document.querySelector("#" + campo)) {
            console.log(campo);
            document.querySelector("#" + campo).value = resultado[campo]
        }
    }
}

function consultaCEP() {
    let cepDigitado = document.getElementById("cep");

    if (cepDigitado.value == "") {
        cepDigitado.style.border = "1px solid red";
    } else {
        //tira o que tá no primeiro parâmetro e insere o que está no segundo. Nessa situação o - do CEP é apagado, caso retirado
        let cepProcurado = cepDigitado.value.replace("-", "");
        console.log(cepProcurado);

        fetch(`http://viacep.com.br/ws/${cepProcurado}/json/`)
            .then(response => {
                response.json()
                    .then(data => console.log(apresentaDados(data)));
            })
            .catch(x => console.log("CEP não encontrado!!"));
    }
}*/
/*======================================================================================================== */
document.getElementById('donation-form').addEventListener('submit', function(event) {
    event.preventDefault();
    
    const name = document.getElementById('name').value.trim();
    const cpf = document.getElementById('cpf').value.trim();
    const amount = document.getElementById('amount').value.trim();
    
    if (!name || !cpf || !amount) {
        alert('Por favor, preencha todos os campos obrigatórios.');
        return;
    }
    
    alert('Doação enviada com sucesso!');
});

function generateQRCode() {
    const name = document.getElementById('name').value.trim();
    const cpf = document.getElementById('cpf').value.trim();
    const amount = document.getElementById('amount').value.trim();
    const paymentMethod = document.getElementById('payment-method').value;
    
    if (!name || !cpf || !amount) {
        alert('Por favor, preencha todos os campos obrigatórios antes de gerar o QR Code.');
        return;
    }
    
    const qrCodeData = `Nome: ${name}\nCPF: ${cpf}\nValor: R$${amount}\nMétodo de Pagamento: ${paymentMethod}`;
    QRCode.toCanvas(document.getElementById('qrcode'), qrCodeData, function (error) {
        if (error) console.error(error);
        console.log('QR Code gerado com sucesso!');
    });
}
/*======================================================================================================== */
/*document.getElementById('password-recovery-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Evita o envio do formulário

    // Obtém o valor inserido pelo usuário e o método escolhido
    const contact = document.getElementById('contact').value;
    const method = document.getElementById('method').value;
    const messageElement = document.getElementById('message');

    // Simulação do envio de e-mail ou SMS
    if (method === 'email') {
        // Aqui você colocaria o código para enviar o e-mail
        messageElement.innerText = `Um link de recuperação foi enviado para o e-mail: ${contact}`;
    } else if (method === 'sms') {
        // Aqui você colocaria o código para enviar o SMS
        messageElement.innerText = `Um código de recuperação foi enviado via SMS para o número: ${contact}`;
    }
});*/
/*======================================================================================================== */

            function previewImage(event) {
              var reader = new FileReader();
              reader.onload = function(){
                var output = document.getElementById('preview');
                output.src = reader.result;
                output.style.display = 'block';
              };
              reader.readAsDataURL(event.target.files[0]);
            }
       
