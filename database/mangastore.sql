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
        '../../src/img/Dario-photo.jpg',
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
        '../../src/img/rogerio-profile.jpg',
        'Rogerio',
        'rogerio@hotmail.com',
        '123.456.789-15',
        '123',
        'USER'
    ),
    (
        4,
        '../../src/img/telma-profile.jpg',
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
        'L continua colocando em pratica seus planos para capturar Kira, pois ao que parece, este jogo de gato e rato esta longe de terminar??? Ap??s acontecimentos inesperados, o jovem Light ?? convidado a se unir ?? equipe de investiga????o. De bom grado, Yagami se prop??e a ajudar, contando com seus pr??prios ?????ses??? na manga. Por??m, um falso Kira surge. Como isso afetar?? a disputa entre os dois g??nios?',
        '49,90'
    ),
    (
        3,
        'O Cao que guarda as Estrelas - Volume unico',
        'Takashi Murakami',
        'JBC',
        'Drama, Seinen',
        'A hist??ria conta uma aventura vivida por dois companheiros, um simples senhor, sem dinheiro, emprego, ou familia, e seu cachorro, que farao o poss??vel para viver e sobreviver a sua ???viagem??? pelo interior do Japao.',
        '99,90'
    ),
    (
        4,
        'Your name - Volume 1',
        'Makoto Shinkai',
        'JBC',
        'Drama, Romance',
        'Mitsuha e uma estudante que vive em uma pequena cidade nas montanhas. Apesar de sua vida tranquila, ela sempre se sentiu atra??da pelo cotidiano das grandes cidades. Um dia, Mitsuha tem um sonho estranho em que se torna um garoto. No sonho, ela acorda em um quarto que nao e dela, tem amigos que nunca viu e passeia por Toquio.',
        '45,90'
    ),
    (
        5,
        'Kaguya Sama - Love is War - Volume 1',
        'Tsugumi Ohba e Takeshi Obata',
        'Panini',
        'Com??dia rom??ntica, Seinen',
        'Fam??lia e apar??ncia impec??veis! No Col??gio Shuchiin, onde os prod??gios do amanh?? s??o reunidos para estudar! Foi l?? que Kaguya Shinomiya, vice-presidente da Associa????o Estudantil, e Miyuki Shirogane, o presidente, se conheceram e passaram a sentir atra????o um pelo outro. Mas. meio ano se passou e nada aconteceu! Os dois t??m orgulho forte e obstina????o e adquiriram a enfadonha mania de pensar sempre em como fazer para que o outro confesse seus sentimentos! Vai ser divertido acompanhar como esse romance evolui! Que comece essa nova com??dia rom??ntica em forma de batalha de intelectos!',
        '39,90'
    ),
    (
        6,
        'Tomie - Volume 1',
        'Junji Ito',
        'Pipoca e Nanquim',
        'Terror psicol??gico, Fic????o sobrenatural',
        'Podem mat??-la quantas vezes quiserem, que ela ainda assim ressurgir?? neste mundo, mais bela do que nunca. Ningu??m sabe ao certo quem ou o que ela ??, mas uma coisa ?? certa: se voc?? se deparar com Tomie Kawakami, seu destino estar?? selado. E ele n??o poderia ser mais aterrador. Por tr??s de um rosto fascinante, real??ado por uma ??nica pinta debaixo do olho esquerdo, esconde-se um mal terr??vel.',
        '97,90'
    ),
    (
        7,
        'Banana Fish - Volume 1',
        'Akimi Yoshida',
        'Panini',
        'Crime, Suspense',
        'Vietn??, 1973. Um soldado americano sofreu um repentino dist??rbio mental e proferiu apenas as seguintes palavras: "bananafish". Nova Iorque, 1985. Ash tenta descobrir o significado desse misterioso termo enquanto a sombra sinistra de Papa Dino, o chefe do submundo, se aproxima dele.',
        '139,80'
    ),
    (
        8,
        'Fullmetal Alchemist - Volume 2',
        'Hiromu Arakawa',
        'JBC',
        'Fantasia, Steampunk',
        'O Coronel Mustang apresenta Ed e Al a um alquimista especializado na transmuta????o de quimeras falantes, e os garotos aproveitam para se enfurnarem na biblioteca dele em busca de alguma forma de recuperar os seus corpos. Apenas a pequena Nina, ador??vel filha do anfitri??o, consegue tir??-los do estudo para alguns breves momentos de divers??o. Mas os momentos de alegria duram pouco, e os irm??os Elric descobrem uma verdade fria entre as pesquisas do mestre das quimeras.',
        '49,90'
    ),
    (
        9,
        'One Piece - Volume 2',
        'Eiichiro Oda',
        'Panini',
        'Comedia, Fantasia, A????o',
        'Luffy Chap??u de Palha n??o est?? mais sozinho em sua jornada, depois de admitir em sua tripula????o o famoso espadachim Roronoa Zoro, o Ca??a-Piratas! Mas um imprevisto os separa, colocando Luffy no caminho do Bando do Pirata Buggy, o Palha??o, que est?? aterrorizando uma pequena cidade portu??ria! E ele tamb??m conhece uma misteriosa ladra, que promete muita confus??o e trapa??as por onde passa.',
        '129,90'
    ),
    (
        10,
        'Chainsaw Man - Volume 1',
        'Tatsuki Fujimoto',
        'Panini',
        'A????o, Fantasia sombria',
        'Denji ?? um jovem extremamente pobre que junto de Pochita, seu dem??nio de estima????o, trabalha feito um condenado como Ca??ador de Dem??nios para pagar a imensa d??vida que possui. Mas sua vida de mis??ria est?? prestes a mudar gra??as a uma trai????o brutal! Aqui come??a a hist??ria de um novo anti-her??i que com um dem??nio em seu corpo, ca??a dem??nios!',
        '26,50'
    ),
    (
        11,
        'Another - Volume 3',
        'Yukito Ayatsuji, Hiro Kiyohara',
        'JBC',
        'Terror, Mist??rio',
        'O fen??meno da classe 3-3 toma novas propor????es com as revela????es do Sr. Chibiki, que conta ?? Koichi e Mei sobre detalhes da maldi????o que ocorreu em outros anos no col??gio Yomikita. A press??o aumenta e a situa????o se torna insuport??vel para alguns. As mortes continuam apesar de quem ???n??o existe???, mas uma pista leva Sakakibara e seus colegas a terem esperan??a de parar a maldi????o. Afinal??? quem ?? o morto?',
        '23,90'
    ),
    (
        12,
        'Happiness - Volume 1',
        'Shuzo Oshimi',
        'New Pop',
        'Sobrenatural, Terror',
        'Com uma mistura de gore e terror, Happiness ?? um shounen diferente que trabalha as v??rias facetas humanas. Na hist??ria, Makoto Okazaki ?? um garoto que est?? sempre evitando confrontos e escondendo seus verdadeiros interesses, sem saber como se expressar. Num dia fat??dico, por??m, Makoto ?? atacado e for??ado a fazer uma escolha: morrer como um humano ou viver como um vampiro. Desesperado e com medo da morte, o rapaz escolhe viver, mas sua nova "vida" n??o ?? algo que ele possa fingir que n??o existe e o rapaz se v?? for??ado a encarar quem ?? e seus desejos.',
        '21,80'
    ),
    (
        13,
        'Boa Noite Punpun - Volume 1',
        'Inio Asano',
        'JBC',
        'Drama, Slice of life, Psicol??gico',
        'Punpun Onodera ?? um garoto normal, que vive feliz com sua fam??lia. Um dia, Aiko Tanaka ?? transferida para a sua escola. Foi paix??o ?? primeira vista!! Voltando juntos para casa, ela conta que no futuro, ???a Terra vai se tornar um planeta inabit??vel???. ?? nessa hora que Punpun decide ser um cientista espacial. Por??m, bem quando encontra seu objetivo na vida, a sua realidade come??a a desmoronar. Considerado por muitos como a obra-prima do aclamado Inio Asano, Boa Noite Punpun ?? um slice of life que trata de temas delicados como solid??o, rela????es familiares conturbadas e depress??o.',
        '37,90'
    ),
    (
        14,
        'A Menina do Outro Lado - Volume 1',
        'Nagabe',
        'Darkside',
        'Conto de fadas, Fic????o',
        'Em um pa??s dividido entre pessoas normais e seres amaldi??oados, Shiva ?? uma menininha que foi acolhida por uma estranha criatura meio animal e meio humana. Sensei, como ?? chamado, n??o pode ser tocado e vive fora da cidade. Afastado do conv??vio com os demais e ciente dos perigos e maldi????es que os rodeiam, Sensei alerta Shiva para que ela n??o saia sozinha. Por??m, quando a menininha decide reencontrar sua tia desaparecida, regras s??o quebradas ??? e a vida que eles conheciam ?? colocada em risco.',
        '47,90'
    ),
    (
        15,
        'Jujutsu Kaisen: Batalha de Feiticeiros - Volume 1',
        'Gege Akutami',
        'Panini',
        'Fantasia sombria. Fic????o sobrenatural',
        'Apesar do estudante colegial Yuuji Itadori ter grande for??a f??sica, ele se inscreve no Clube de Ocultismo. Certo dia, eles encontram um "objeto amaldi??oado" e retiram o selo, atraindo criaturas chamadas de "maldi????es". Itadori corre em socorro de seus colegas, mas ser?? que ele ser?? capaz de abater essas criaturas usando apenas a for??a f??sica?',
        '33,90'
    );

-- Estrutura tabelas de relat??rios
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
        '2022-02-22',
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
        '2022-06-13',
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
        '2022-04-01',
        3
    ),
    (
        8,
        'Banana Fish - Volume 1',
        1,
        '139,80',
        '2022-10-01',
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