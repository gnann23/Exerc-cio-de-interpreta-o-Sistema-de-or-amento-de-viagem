# Exerccio-de-interpreta-o-Sistema-de-or-amento-de-viagem


A empresa Senac Tour trabalha com a organização de viagens nacionais e precisa melhorar a forma como apresenta seus orçamentos aos clientes.
Atualmente, os atendentes realizam todos os cálculos manualmente. Eles anotam os dados do cliente, verificam a quantidade de viajantes, calculam os custos da passagem, da hospedagem, da alimentação, do transporte e dos passeios e, ao final, somam todos os valores.
Esse processo tem causado alguns problemas. Em determinados atendimentos, valores são esquecidos, cálculos são feitos de forma incorreta e o cliente recebe um orçamento desorganizado. Para reduzir esses erros, a empresa decidiu criar um programa em PHP que será executado diretamente pelo terminal.
O sistema deverá começar apresentando o nome da agência. Em seguida, deverá solicitar o nome do cliente, a cidade de origem e a cidade de destino da viagem.
Também será necessário informar quantas pessoas participarão da viagem e quantos dias ela terá. Essas informações serão importantes porque alguns custos dependem da quantidade de viajantes e outros dependem da duração da viagem.
Cada viajante deverá pagar uma passagem. Portanto, o programa deverá solicitar o valor da passagem por pessoa e calcular o valor total das passagens de acordo com a quantidade de viajantes.
A hospedagem será cobrada por diária. O atendente deverá informar o valor de uma diária, e o sistema deverá calcular o valor total da hospedagem considerando a quantidade de dias da viagem.
A alimentação também deverá fazer parte do orçamento. O programa deverá solicitar uma estimativa de gasto diário com alimentação por pessoa. Para descobrir o total da alimentação, será necessário considerar o valor diário, a quantidade de dias e a quantidade de viajantes.
O transporte local será calculado de maneira diferente. O atendente deverá informar o valor estimado de transporte por dia, e o sistema deverá multiplicar esse valor pela quantidade de dias da viagem.
A agência também oferece um passeio turístico. O valor do passeio deverá ser informado por pessoa. Dessa forma, o programa deverá calcular o custo total dos passeios considerando todos os viajantes.
Depois de calcular cada uma dessas despesas, o sistema deverá somar os valores das passagens, da hospedagem, da alimentação, do transporte e dos passeios. O resultado será o valor total estimado da viagem.
Além do valor total, a agência deseja informar quanto a viagem custará, em média, para cada pessoa. Para isso, o programa deverá dividir o valor total da viagem pela quantidade de viajantes.
Ao final do processamento, o programa deverá gerar um número aleatório para identificar o orçamento e apresentar a data em que ele foi criado.
O orçamento deverá ser exibido de forma organizada, contendo os dados do cliente, o trajeto, a quantidade de viajantes, a duração da viagem, os valores de cada categoria de gasto, o valor total da viagem e o custo médio por viajante.
Todos os valores monetários deverão ser apresentados no formato brasileiro, com duas casas decimais.
