function maskCPF(numberCPF){
    var cpf = numberCPF.value;
    
    if (isNaN(cpf[cpf.length-1])){
        numberCPF.value = cpf.substring(0, cpf.length-1);
        return;
    }

    if(cpf.length === 3 || cpf.length ===7){
        numberCPF.value += ".";
    }
    if(cpf.length === 11){
        numberCPF.value += "-";
    }
}