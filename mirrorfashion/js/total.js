var $input_quantidade = document.querySelector("#qt"); /*Ler a quantidade escolhia no input number*/
var $output_total = document.querySelector("#total"); /*Ler a saida no leitor output do input number*/

$input_quantidade.oninput = function(){ /*Função anônima criada no instante em que se escolhe um numero no input number e lida atraves da variavel $input_quantidade*/
	var preco = document.querySelector("#preco").textContent; /*guardará o texto da dd preço*/
	preco = preco.replace("R$ ", ""); /*substitui R$ por vazio "" e guarda na variavel preco*/
	preco = preco.replace(",", "."); /*substitui , por . na e guarda na variavel preco*/
	preco = parseFloat(preco); /*converte a String preco para float e guarda na variavel preco*/
	var quantidade = $input_quantidade.value; /*guarda o valor da variavel $input_quantidade na variavel quantidade*/
	var total = quantidade * preco; /*multiplica a quantidade pelo preco e guarda na variavel total*/
	total = "R$ " + total.toFixed(2) /*concatena a string R$ com o total acrescentado duas casas decimas .00 e guarda na variavel total*/
	total = total.replace(".", ","); /*substitui o . por ,*/
	$output_total.value = total; /*altera/exibe o valor do leitor do number com o valor da variavel total*/
}