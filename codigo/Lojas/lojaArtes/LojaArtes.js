function criarFooter() {

    const footer= document.createElement("footer");        /*NESSA PARTE SÃO CRIADAS AS PRINCIPAIS CLASSES DO FOOTER */
    
    const wrapper= document.createElement('div');
    wrapper.classList.add('wrapper');

    const box1 = document.createElement('div');         
    box1.classList.add('box', 'box1');

    const box2 = document.createElement('div');
    box2.classList.add('box','box2');

    const box3=document.createElement('div');
    box3.classList.add('box','box3');

    
    /*AGORA SERÁ A CRIAÇÃO DE CADA UM DOS ELEMENTOS PRESENTES NO FOOTER*/
    
    /*CRIAÇÃO DO BOX 1 */
    const logoF = document.createElement('img');
    logoF.src ="/codigo/assets/Footer/kelly logo trans-hori.png";
    logoF.alt = "";
    logoF.setAttribute("id","logoF")
    

    /*CRIAÇAO DO BOX2*/

    const h3RedesSociais = document.createElement('h3');
    h3RedesSociais.textContent = "Redes Sociais";

    const redes = document.createElement('div');
    redes.classList.add('redes');

    const insta = document.createElement('div');
    insta.id= "insta";

    const imgInsta = document.createElement('img');
    imgInsta.src= "/codigo/assets/footer/instagram.svg";
    imgInsta.alt= "";
    
    imgInsta.setAttribute("class","imgRedesSociais")

    const nestedInsta = document.createElement('div');
    nestedInsta.classList.add('neasted');
    nestedInsta.textContent = "@KellyFonseca";

    insta.appendChild(imgInsta);
    insta.appendChild(nestedInsta);
    
    const face = document.createElement('div');
    face.id = "face";

    const imgFace = document.createElement('img');
    imgFace.src = "/codigo/assets/footer/facebook.svg";
    imgFace.alt= "";
    
    imgFace.setAttribute("class","imgRedesSociais");

    const nestedFace = document.createElement('div');
    nestedFace.classList.add('neasted');
    nestedFace.textContent = "@KellyFonseca";

    face.appendChild(imgFace);
    face.appendChild(nestedFace);

    face.appendChild(insta);
    

    /*CRIAÇÃO DO BOX3*/
    const h3Contato = document.createElement('h3');
    h3Contato.textContent = "Contato";
    h3Contato.setAttribute("class", "Contato")
    const contato = document.createElement('div');
    contato.classList.add('contato');

    const email = document.createElement('div');
    email.id = "email";

    const h4Email = document.createElement('h4');
    h4Email.textContent = "Email";

    const imgEmail = document.createElement('img');
    imgEmail.src = "/codigo/assets/footer/email.svg";
    imgEmail.alt = "";

    imgEmail.setAttribute("class","Contatos");
    const nestedEmail = document.createElement('div');
    nestedEmail.classList.add('neasted');
    nestedEmail.textContent = "KellyFonseca@gmail.com";

    
    email.appendChild(h4Email);
    email.appendChild(imgEmail);
    email.appendChild(nestedEmail);

    const telefone = document.createElement('div');
    telefone.id= "tel";

    const h4Telefone = document.createElement('h4');
    h4Telefone.textContent= "Telefone";

    const imgTelefone = document.createElement('img');
    imgTelefone.src = "/codigo/assets/footer/zap.svg";
    imgTelefone.alt = "";

    imgTelefone.setAttribute("class","Contatos");

    const nestedTelefone = document.createElement('div');
    nestedTelefone.classList.add('neasted');
    nestedTelefone.textContent="(31) 123123-13223";

    

    telefone.appendChild(h4Telefone);
    telefone.appendChild(imgTelefone);
    telefone.appendChild(nestedTelefone);

    contato.appendChild(email);
    contato.appendChild(telefone);


    /*ANEXAÇÃO DOS FILHOS AOS PAIS*/
    box1.appendChild(logoF);
    wrapper.appendChild(box1);

    redes.appendChild(insta);
    redes.appendChild(face);
    box2.appendChild(h3RedesSociais);
    box2.appendChild(redes);
    wrapper.appendChild(box2);
    
    contato.appendChild(email);
    contato.appendChild(telefone);
    box3.appendChild(h3Contato);
    box3.appendChild(contato);
    
    const divFooter = document.getElementById('footer');
    
    wrapper.appendChild(box3);

    footer.appendChild(wrapper);

    divFooter.appendChild(footer);

}
criarFooter()
