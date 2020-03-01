function VerificarCPF()
{
    var valid;
    
    var cpf = prompt("Digite seu CPF:");
    
    if (cpf == "")
    {
        alert("Ops! Digite seu CPF!")
    }
    else if (cpf != null)
    {
        window.location.href = "#";
    }
}