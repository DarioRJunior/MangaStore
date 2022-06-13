SET
    SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

SET
    time_zone = "+00:00";

-- Database: `mangastore`
-- Estrutura da tabela `usuario`
CREATE TABLE IF NOT EXISTS `usuario` (
    `id` int(2) NOT NULL AUTO_INCREMENT,
    `avatar` varchar(255) NOT NULL,
    `nome` varchar(45) NOT NULL,
    `email` varchar(110) NOT NULL,
    `cpf` varchar(14) NOT NULL,
    `senha` varchar(15) NOT NULL,
    `nivel` varchar(4),
    PRIMARY KEY (`id`)
) ENGINE = InnoDB AUTO_INCREMENT = 3 DEFAULT CHARSET = latin1;

-- Criando login ADM
INSERT INTO
    `usuario` (
        `id`,
        `avatar`,
        `nome`,
        `email`,
        `cpf`,
        `senha`,
        `nivel`
    )
VALUES
    (
        1,
        '../../src/img/Foto minha.jpg',
        'Dario',
        'dario@gmail.com',
        '123.456.789-11',
        '123',
        'ADM'
    ),
    (
        2,
        '../../src/img/may.jpg',
        'May',
        'may@hotmail.com',
        '123.456.729-20',
        '123',
        'USER'
    ),
    (
        3,
        '../../src/img/Foto minha.jpg',
        'Rogerio',
        'rogerio@hotmail.com',
        '123.456.789-15',
        '123',
        'USER'
    ),
    (
        4,
        '../../src/img/Foto minha.jpg',
        'Telma',
        'telma@hotmail.com',
        '123.456.789-24',
        '123',
        'USER'
    );

-- Estrutura da tabela `manga`
CREATE TABLE IF NOT EXISTS `manga` (
    `idManga` int(2) NOT NULL AUTO_INCREMENT,
    `nome` varchar(45) NOT NULL,
    `autor` varchar(45) NOT NULL,
    `editora` varchar(45) NOT NULL,
    `genero` varchar(45) NOT NULL,
    `sinopse` varchar(255) NOT NULL,
    `preco` DECIMAL(10, 2) NOT NULL,
    PRIMARY KEY (`idManga`)
) ENGINE = InnoDB AUTO_INCREMENT = 3 DEFAULT CHARSET = latin1;

-- Criando Mangas
INSERT INTO
    `manga` (
        `idManga`,
        `nome`,
        `autor`,
        `editora`,
        `genero`,
        `sinopse`,
        `preco`
    )
VALUES
    (
        1,
        'Death Note - Black Edition - Volume 1',
        'Tsugumi Ohba e Takeshi Obata',
        'JBC',
        'Misterio, Suspense psicologico, Suspense',
        'Sem nada de interessante para fazer no Mundo dos Shinigamis, o Deus da Morte Ryuk deixa cair intencionalmente na Terra o seu Death Note.',
        '49,90'
    ),
    (
        2,
        'Death Note - Black Edition - Volume 2',
        'Tsugumi Ohba e Takeshi Obata',
        'JBC',
        'Misterio, Suspense psicologico, Suspense',
        'L continua colocando em prática seus planos para capturar Kira, pois ao que parece, este jogo de gato e rato está longe de terminar… Após acontecimentos inesperados, o jovem Light é convidado a se unir à equipe de investigação. De bom grado, Yagami se propõe a ajudar, contando com seus próprios “áses” na manga. Porém, um falso Kira surge. Como isso afetará a disputa entre os dois gênios?',
        '49,90'
    ),
    (
        3,
        'O Cao que guarda as Estrelas - Volume unico',
        'Takashi Murakami',
        'JBC',
        'Drama, Seinen',
        'A história conta uma aventura vivida por dois companheiros, um simples senhor, sem dinheiro, emprego, ou familia, e seu cachorro, que farao o possível para viver e sobreviver a sua “viagem” pelo interior do Japao.',
        '99,90'
    ),
    (
        4,
        'Your name - Volume 1',
        'Makoto Shinkai',
        'JBC',
        'Drama, Romance',
        'Mitsuha e uma estudante que vive em uma pequena cidade nas montanhas. Apesar de sua vida tranquila, ela sempre se sentiu atraída pelo cotidiano das grandes cidades. Um dia, Mitsuha tem um sonho estranho em que se torna um garoto. No sonho, ela acorda em um quarto que nao e dela, tem amigos que nunca viu e passeia por Toquio.',
        '45,90'
    ),
    (
        5,
        'Kaguya Sama - Love is War - Volume 1',
        'Tsugumi Ohba e Takeshi Obata',
        'Panini',
        'Comédia romântica, Seinen',
        'Família e aparência impecáveis! No Colégio Shuchiin, onde os prodígios do amanhã são reunidos para estudar! Foi lá que Kaguya Shinomiya, vice-presidente da Associação Estudantil, e Miyuki Shirogane, o presidente, se conheceram e passaram a sentir atração um pelo outro. Mas. meio ano se passou e nada aconteceu! Os dois têm orgulho forte e obstinação e adquiriram a enfadonha mania de pensar sempre em como fazer para que o outro confesse seus sentimentos! Vai ser divertido acompanhar como esse romance evolui! Que comece essa nova comédia romântica em forma de batalha de intelectos!',
        '39,90'
    ),
    (
        6,
        'Tomie - Volume 1',
        'Junji Ito',
        'Pipoca e Nanquim',
        'Terror psicológico, Ficção sobrenatural',
        'Podem matá-la quantas vezes quiserem, que ela ainda assim ressurgirá neste mundo, mais bela do que nunca. Ninguém sabe ao certo quem ou o que ela é, mas uma coisa é certa: se você se deparar com Tomie Kawakami, seu destino estará selado. E ele não poderia ser mais aterrador. Por trás de um rosto fascinante, realçado por uma única pinta debaixo do olho esquerdo, esconde-se um mal terrível.',
        '97,90'
    ),
    (
        7,
        'Banana Fish - Volume 1',
        'Akimi Yoshida',
        'Panini',
        'Crime, Suspense',
        'Vietnã, 1973. Um soldado americano sofreu um repentino distúrbio mental e proferiu apenas as seguintes palavras: "bananafish". Nova Iorque, 1985. Ash tenta descobrir o significado desse misterioso termo enquanto a sombra sinistra de Papa Dino, o chefe do submundo, se aproxima dele.',
        '139,80'
    ),
    (
        8,
        'Fullmetal Alchemist - Volume 2',
        'Hiromu Arakawa',
        'JBC',
        'Fantasia, Steampunk',
        'O Coronel Mustang apresenta Ed e Al a um alquimista especializado na transmutação de quimeras falantes, e os garotos aproveitam para se enfurnarem na biblioteca dele em busca de alguma forma de recuperar os seus corpos. Apenas a pequena Nina, adorável filha do anfitrião, consegue tirá-los do estudo para alguns breves momentos de diversão. Mas os momentos de alegria duram pouco, e os irmãos Elric descobrem uma verdade fria entre as pesquisas do mestre das quimeras.',
        '49,90'
    ),
    (
        9,
        'One Piece - Volume 2',
        'Eiichiro Oda',
        'Panini',
        'Comedia, Fantasia, Ação',
        'Luffy Chapéu de Palha não está mais sozinho em sua jornada, depois de admitir em sua tripulação o famoso espadachim Roronoa Zoro, o Caça-Piratas! Mas um imprevisto os separa, colocando Luffy no caminho do Bando do Pirata Buggy, o Palhaço, que está aterrorizando uma pequena cidade portuária! E ele também conhece uma misteriosa ladra, que promete muita confusão e trapaças por onde passa.',
        '129,90'
    ),
    (
        10,
        'Chainsaw Man - Volume 1',
        'Tatsuki Fujimoto',
        'Panini',
        'Ação, Fantasia sombria',
        'Denji é um jovem extremamente pobre que junto de Pochita, seu demônio de estimação, trabalha feito um condenado como Caçador de Demônios para pagar a imensa dívida que possui. Mas sua vida de miséria está prestes a mudar graças a uma traição brutal! Aqui começa a história de um novo anti-herói que com um demônio em seu corpo, caça demônios!',
        '26,50'
    ),
    (
        11,
        'Another - Volume 3',
        'Yukito Ayatsuji, Hiro Kiyohara',
        'JBC',
        'Terror, Mistério',
        'O fenômeno da classe 3-3 toma novas proporções com as revelações do Sr. Chibiki, que conta à Koichi e Mei sobre detalhes da maldição que ocorreu em outros anos no colégio Yomikita. A pressão aumenta e a situação se torna insuportável para alguns. As mortes continuam apesar de quem “não existe”, mas uma pista leva Sakakibara e seus colegas a terem esperança de parar a maldição. Afinal… quem é o morto?',
        '23,90'
    ),
    (
        12,
        'Happiness - Volume 1',
        'Shuzo Oshimi',
        'New Pop',
        'Sobrenatural, Terror',
        'Com uma mistura de gore e terror, Happiness é um shounen diferente que trabalha as várias facetas humanas. Na história, Makoto Okazaki é um garoto que está sempre evitando confrontos e escondendo seus verdadeiros interesses, sem saber como se expressar. Num dia fatídico, porém, Makoto é atacado e forçado a fazer uma escolha: morrer como um humano ou viver como um vampiro. Desesperado e com medo da morte, o rapaz escolhe viver, mas sua nova "vida" não é algo que ele possa fingir que não existe e o rapaz se vê forçado a encarar quem é e seus desejos.',
        '21,80'
    ),
    (
        13,
        'Boa Noite Punpun - Volume 1',
        'Inio Asano',
        'JBC',
        'Drama, Slice of life, Psicológico',
        'Punpun Onodera é um garoto normal, que vive feliz com sua família. Um dia, Aiko Tanaka é transferida para a sua escola. Foi paixão à primeira vista!! Voltando juntos para casa, ela conta que no futuro, “a Terra vai se tornar um planeta inabitável”. É nessa hora que Punpun decide ser um cientista espacial. Porém, bem quando encontra seu objetivo na vida, a sua realidade começa a desmoronar. Considerado por muitos como a obra-prima do aclamado Inio Asano, Boa Noite Punpun é um slice of life que trata de temas delicados como solidão, relações familiares conturbadas e depressão.',
        '37,90'
    ),
    (
        14,
        'A Menina do Outro Lado - Volume 1',
        'Nagabe',
        'Darkside',
        'Conto de fadas, Ficção',
        'Em um país dividido entre pessoas normais e seres amaldiçoados, Shiva é uma menininha que foi acolhida por uma estranha criatura meio animal e meio humana. Sensei, como é chamado, não pode ser tocado e vive fora da cidade. Afastado do convívio com os demais e ciente dos perigos e maldições que os rodeiam, Sensei alerta Shiva para que ela não saia sozinha. Porém, quando a menininha decide reencontrar sua tia desaparecida, regras são quebradas ― e a vida que eles conheciam é colocada em risco.',
        '47,90'
    ),
    (
        15,
        'Jujutsu Kaisen: Batalha de Feiticeiros - Volume 1',
        'Gege Akutami',
        'Panini',
        'Fantasia sombria. Ficção sobrenatural',
        'Apesar do estudante colegial Yuuji Itadori ter grande força física, ele se inscreve no Clube de Ocultismo. Certo dia, eles encontram um "objeto amaldiçoado" e retiram o selo, atraindo criaturas chamadas de "maldições". Itadori corre em socorro de seus colegas, mas será que ele será capaz de abater essas criaturas usando apenas a força física?',
        '33,90'
    );

-- Estrutura tabelas de relatórios
CREATE TABLE IF NOT EXISTS `relatorio`(
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `titulo` VARCHAR(255) NOT NULL,
    `quantidade` INT(11) NOT NULL,
    `preco` DECIMAL(10, 2) NOT NULL,
    `data` DATE NOT NULL,
    `id_usuario` INT(11) NOT NULL,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`id_usuario`) REFERENCES `usuario`(`id`)
) ENGINE = InnoDB AUTO_INCREMENT = 3 DEFAULT CHARSET = latin1;

INSERT INTO
    `relatorio`(
        `id`,
        `titulo`,
        `quantidade`,
        `preco`,
        `data`,
        `id_usuario`
    )
VALUES
    (
        1,
        'A Menina do Outro Lado - Volume 1',
        1,
        '47,90',
        '2022-05-01',
        2
    ),
    (
        2,
        'Boa Noite Punpun - Volume 1',
        1,
        '21,80',
        '2022-06-22',
        2
    ),
    (
        3,
        'Happiness - Volume 1',
        1,
        '23,90',
        '2022-05-05',
        2
    ),
    (
        4,
        'Jujutsu Kaisen: Batalha de Feiticeiros - Volume 1',
        1,
        '33,90',
        '2022-05-13',
        2
    ),
    (
        5,
        'Kimi no Na wa - Volume 1',
        1,
        '29,90',
        '2022-06-13',
        2
    ),
    (
        6,
        'Your name - Volume 1',
        1,
        '45,90',
        '2022-05-01',
        3
    ),
    (
        7,
        'O Cao que guarda as Estrelas - Volume unico',
        1,
        '99,90',
        '2022-05-01',
        3
    ),
    (
        8,
        'Banana Fish - Volume 1',
        1,
        '139,80',
        '2022-05-01',
        3
    ),
    (
        9,
        'Tomie - Volume 1',
        1,
        '97,90',
        '2022-05-01',
        3
    ),
    (
        10,
        'Kaguya Sama - Love is War - Volume 1',
        1,
        '39,90',
        '2022-05-01',
        3
    ),
    (
        11,
        'Kaguya Sama - Love is War - Volume 1',
        1,
        '39,90',
        '2022-05-01',
        4
    ),
    (
        12,
        'Jujutsu Kaisen: Batalha de Feiticeiros - Volume 1',
        1,
        '33,90',
        '2022-05-01',
        4
    ),
    (
        13,
        'Jujutsu Kaisen: Batalha de Feiticeiros - Volume 2',
        1,
        '33,90',
        '2022-05-01',
        4
    ),
    (
        14,
        'Kaguya Sama - Love is War - Volume 2',
        1,
        '39,90',
        '2022-05-01',
        4
    ),
    (
        15,
        'Kaguya Sama - Love is War - Volume 3',
        1,
        '39,90',
        '2022-05-01',
        4
    );