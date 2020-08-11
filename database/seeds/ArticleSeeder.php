<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        
        //Motores de cortina
        
        DB::table('articles')->insert([
            'name' => 'EM152',
            'slug' => 'EM152',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, dolore. Eveniet quibusdam necessitatibus perspiciatis voluptates nobis quisquam perferendis rem dolore quia fugit nostrum, magni facere vitae, cumque repellat itaque. Ullam illum fuga porro magni rem quasi laboriosam quos delectus recusandae, nostrum neque corporis doloribus veniam voluptates maxime soluta quod. Libero placeat pariatur adipisci impedit dolor nam corporis ex eius nisi.',
            'category_id' => 1,
        ]);

        DB::table('articles')->insert([
            'name' => 'EM3020',
            'slug' => 'EM3020',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, dolore. Eveniet quibusdam necessitatibus perspiciatis voluptates nobis quisquam perferendis rem dolore quia fugit nostrum, magni facere vitae, cumque repellat itaque. Ullam illum fuga porro magni rem quasi laboriosam quos delectus recusandae, nostrum neque corporis doloribus veniam voluptates maxime soluta quod. Libero placeat pariatur adipisci impedit dolor nam corporis ex eius nisi.',
            'category_id' => 1,
        ]);

        DB::table('articles')->insert([
            'name' => 'EM5014',
            'slug' => 'EM5014',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, dolore. Eveniet quibusdam necessitatibus perspiciatis voluptates nobis quisquam perferendis rem dolore quia fugit nostrum, magni facere vitae, cumque repellat itaque. Ullam illum fuga porro magni rem quasi laboriosam quos delectus recusandae, nostrum neque corporis doloribus veniam voluptates maxime soluta quod. Libero placeat pariatur adipisci impedit dolor nam corporis ex eius nisi.',
            'category_id' => 1,
        ]);
        
        //Barreras de acceso

        DB::table('articles')->insert([
            'name' => 'wide',
            'slug' => 'wide',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, dolore. Eveniet quibusdam necessitatibus perspiciatis voluptates nobis quisquam perferendis rem dolore quia fugit nostrum, magni facere vitae, cumque repellat itaque. Ullam illum fuga porro magni rem quasi laboriosam quos delectus recusandae, nostrum neque corporis doloribus veniam voluptates maxime soluta quod. Libero placeat pariatur adipisci impedit dolor nam corporis ex eius nisi.',
            'category_id' => 2,
        ]);
        

        DB::table('articles')->insert([
            'name' => 'lbar',
            'slug' => 'lbar',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, dolore. Eveniet quibusdam necessitatibus perspiciatis voluptates nobis quisquam perferendis rem dolore quia fugit nostrum, magni facere vitae, cumque repellat itaque. Ullam illum fuga porro magni rem quasi laboriosam quos delectus recusandae, nostrum neque corporis doloribus veniam voluptates maxime soluta quod. Libero placeat pariatur adipisci impedit dolor nam corporis ex eius nisi.',
            'category_id' => 2,
        ]);
        

        DB::table('articles')->insert([
            'name' => 'mbar',
            'slug' => 'mbar',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, dolore. Eveniet quibusdam necessitatibus perspiciatis voluptates nobis quisquam perferendis rem dolore quia fugit nostrum, magni facere vitae, cumque repellat itaque. Ullam illum fuga porro magni rem quasi laboriosam quos delectus recusandae, nostrum neque corporis doloribus veniam voluptates maxime soluta quod. Libero placeat pariatur adipisci impedit dolor nam corporis ex eius nisi.',
            'category_id' => 2,
        ]);
        
        //Motores corredizos
        
        
        DB::table('articles')->insert([
            'name' => 'RUN1800-2500',
            'slug' => 'RUN1800-2500',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, dolore. Eveniet quibusdam necessitatibus perspiciatis voluptates nobis quisquam perferendis rem dolore quia fugit nostrum, magni facere vitae, cumque repellat itaque. Ullam illum fuga porro magni rem quasi laboriosam quos delectus recusandae, nostrum neque corporis doloribus veniam voluptates maxime soluta quod. Libero placeat pariatur adipisci impedit dolor nam corporis ex eius nisi.',
            'category_id' => 3,
        ]);

        DB::table('articles')->insert([
            'name' => 'TUB3500',
            'slug' => 'TUB3500',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, dolore. Eveniet quibusdam necessitatibus perspiciatis voluptates nobis quisquam perferendis rem dolore quia fugit nostrum, magni facere vitae, cumque repellat itaque. Ullam illum fuga porro magni rem quasi laboriosam quos delectus recusandae, nostrum neque corporis doloribus veniam voluptates maxime soluta quod. Libero placeat pariatur adipisci impedit dolor nam corporis ex eius nisi.',
            'category_id' => 3,
        ]);
        
        //Motores ascendentes

        DB::table('articles')->insert([
            'name' => 'SPIDO',
            'slug' => 'SPIDO',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, dolore. Eveniet quibusdam necessitatibus perspiciatis voluptates nobis quisquam perferendis rem dolore quia fugit nostrum, magni facere vitae, cumque repellat itaque. Ullam illum fuga porro magni rem quasi laboriosam quos delectus recusandae, nostrum neque corporis doloribus veniam voluptates maxime soluta quod. Libero placeat pariatur adipisci impedit dolor nam corporis ex eius nisi.',
            'category_id' => 4,
        ]);

        DB::table('articles')->insert([
            'name' => 'SUMO',
            'slug' => 'SUMO',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, dolore. Eveniet quibusdam necessitatibus perspiciatis voluptates nobis quisquam perferendis rem dolore quia fugit nostrum, magni facere vitae, cumque repellat itaque. Ullam illum fuga porro magni rem quasi laboriosam quos delectus recusandae, nostrum neque corporis doloribus veniam voluptates maxime soluta quod. Libero placeat pariatur adipisci impedit dolor nam corporis ex eius nisi.',
            'category_id' => 4,
        ]);

        //Puertas seccionales

        DB::table('articles')->insert([
            'name' => 'gh3240',
            'slug' => 'gh-3240',
            'description' => 'Las Puertas Seccionales Comerciales de GH han sido diseñadas para ser funcionales y capaces de soportar las operaciones diarias en los entornos industriales más difíciles. así mismo han sido construidas para poder adaptarse a distintas aperturas, por lo que las han convertido en la mejor opción de la industria
            Estas puertas seccionales pueden ser usadas de forma manual debido a su sistema de resortes de torsión, también con la opción de poder ser usadas de forma automática 
            Gracias a su construcción le permite adapatarse a diferentes medidas dentro de cualquier edificio
            ',
            'category_id' => 5,
        ]);

        DB::table('articles')->insert([
            'name' => 'gh3216',
            'slug' => 'gh-3216',
            'description' => 'Las Puertas Seccionales Comerciales de GH han sido diseñadas para ser funcionales y capaces de soportar las operaciones diarias en los entornos industriales más difíciles. así mismo han sido construidas para poder adaptarse a distintas aperturas, por lo que las han convertido en la mejor opción de la industria
            Estas puertas seccionales pueden ser usadas de forma manual debido a su sistema de resortes de torsión, también con la opción de poder ser usadas de forma automática 
            Su composición le permite detener parte de la transmisión térmica debido a su relleno de Poliuretano, convirtiéndose así en una opción para zonas donde el ahorro de energía sea opción
            Gracias a su construcción le permite adapatarse a diferentes medidas dentro de cualquier edificio
            ',
            'category_id' => 5,
        ]);

        DB::table('articles')->insert([
            'name' => 'gh3236',
            'slug' => 'gh-3236',
            'description' => 'Las Puertas Seccionales Comerciales de GH han sido diseñadas para ser funcionales y capaces de soportar las operaciones diarias en los entornos industriales más difíciles. así mismo han sido construidas para poder adaptarse a distintas aperturas, por lo que las han convertido en la mejor opción de la industria
            Estas puertas seccionales pueden ser usadas de forma manual debido a su sistema de resortes de torsión, también con la opción de poder ser usadas de forma automática 
            Su composición le permite detener parte de la transmisión térmica debido a su relleno de Poliuretano expandido, convirtiéndose así en una opción para zonas donde el ahorro de energía sea opción
            Gracias a su alto valor contra la transmisión de calor, se ha convertido en referente donde requieran de una solución que evite la mayor transmisión de calor posible, o mejor dicho en zonas refigeradas 
            Gracias a su construcción le permite adapatarse a diferentes medidas dentro de cualquier edificio
            ',
            'category_id' => 5,
        ]);

        DB::table('articles')->insert([
            'name' => 'gh3285',
            'slug' => 'gh-3285',
            'description' => 'Las Puertas Seccionales Comerciales de GH han sido diseñadas para ser funcionales y capaces de soportar las operaciones diarias en los entornos industriales más difíciles. así mismo han sido construidas para poder adaptarse a distintas aperturas, por lo que las han convertido en la mejor opción de la industria
            Estas puertas seccionales pueden ser usadas de forma manual debido a su sistema de resortes de torsión, también con la opción de poder ser usadas de forma automática 
            Su composición le permite detener parte de la transmisión térmica debido a su relleno de Poliestireno, convirtiéndose así en una opción para zonas donde el ahorro de energía sea opción.
            Siendo una puerta con una solución integrada aislante y económica al misma tiempo, siendo opción para lugares donde requieran tanto económico como energéticamente
            Gracias a su construcción le permite adaptarse a diferentes medidas dentro de cualquier edificio
            ',
            'category_id' => 5,
        ]);

        DB::table('articles')->insert([
            'name' => 'sistema breakfree200',
            'slug' => 'sistema-breakfree200',
            'description' => 'La puerta Breakfree ™ 200 ofrecida por GH es la puerta del andén que ofrece el alto valor de aislamiento de una puerta de poliuretano de 2 "de espesor y la capacidad de desprenderse en caso de impacto.
            Esta puerta patentada está diseñada para liberar la sección inferior en caso de impacto desde el interior o desde el exterior y para volver a colocarla en su lugar. 
            Estas puertas seccionales pueden ser usadas de forma manual debido a su sistema de resortes de torsión, también con la opción de poder ser usadas de forma automática 
            El panel inferior ciego aislado aislante de poliestireno expandido (EPS) de 2 "de espesor, de 24" o 48 "de altura, está hecho de un revestimiento compuesto de material termoplástico extremadamente resistente que puede soportar impactos fuertes.
            Así mismo sido construidas para resistir cargas de viento de 21 psf o 90.5 millas/hora
            ',
            'category_id' => 5,
        ]);

        DB::table('articles')->insert([
            'name' => 'sistema breakfree400',
            'slug' => 'sistema-breakfree400',
            'description' => 'La puerta Breakfree ™ 400 es la puerta de almacenamiento en frío que ofrece el alto valor de aislamiento de una puerta de poliuretano de 4 "de espesor y la capacidad de desprenderse en caso de impacto.
            Esta puerta patentada está diseñada para liberar la sección inferior en caso de impacto, desde el interior o desde el exterior, y se puede colocar fácilmente en su lugar. 
            Estas puertas seccionales pueden ser usadas de forma manual debido a su sistema de resortes de torsión, también con la opción de poder ser usadas de forma automática
            La sección inferior con aislamiento aislada de poliestireno expandido (EPS) de 4 "de espesor, de 30" o 48 "de altura, está hecha de un revestimiento compuesto termoplástico extremadamente resistente que puede soportar impactos pesados.
            ',
            'category_id' => 5,
        ]);

        //Motores tubuiares

        // DB::table('articles')->insert([
        //     'name' => ' ',
        //     'slug' => '',
        //     'description' => '',
        //     'category_id' => 6,
        // ]);

        //Herrajes
        DB::table('articles')->insert([
            'name' => 'barras de pánico',
            'slug' => 'barras-de-panico',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste ex assumenda consequatur quam eveniet dolorem rem eaque ad corporis provident? Id consequuntur harum delectus cum eligendi repellat deleniti pariatur eos vero quas at magni porro, sint quisquam? Voluptatum, enim! Velit repudiandae eius enim eligendi porro, nemo error assumenda commodi earum, voluptatem ipsa! Odio doloribus tempore, hic error cumque aperiam quo?',
            'category_id' => 7,
        ]);
        

        DB::table('articles')->insert([
            'name' => 'cierrapuertas',
            'slug' => 'cierrapuertas',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste ex assumenda consequatur quam eveniet dolorem rem eaque ad corporis provident? Id consequuntur harum delectus cum eligendi repellat deleniti pariatur eos vero quas at magni porro, sint quisquam? Voluptatum, enim! Velit repudiandae eius enim eligendi porro, nemo error assumenda commodi earum, voluptatem ipsa! Odio doloribus tempore, hic error cumque aperiam quo?',
            'category_id' => 7,
        ]);

        DB::table('articles')->insert([
            'name' => 'mirillas',
            'slug' => 'mirillas',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste ex assumenda consequatur quam eveniet dolorem rem eaque ad corporis provident? Id consequuntur harum delectus cum eligendi repellat deleniti pariatur eos vero quas at magni porro, sint quisquam? Voluptatum, enim! Velit repudiandae eius enim eligendi porro, nemo error assumenda commodi earum, voluptatem ipsa! Odio doloribus tempore, hic error cumque aperiam quo?',
            'category_id' => 7,
        ]);

        DB::table('articles')->insert([
            'name' => 'bisagras',
            'slug' => 'bisagras',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste ex assumenda consequatur quam eveniet dolorem rem eaque ad corporis provident? Id consequuntur harum delectus cum eligendi repellat deleniti pariatur eos vero quas at magni porro, sint quisquam? Voluptatum, enim! Velit repudiandae eius enim eligendi porro, nemo error assumenda commodi earum, voluptatem ipsa! Odio doloribus tempore, hic error cumque aperiam quo?',
            'category_id' => 7,
        ]);

        //Cortinas antihuracan

        // DB::table('articles')->insert([
        //     'name' => ' ',
        //     'slug' => '',
        //     'description' => '',
        //     'category_id' => 8,
        // ]);

        //Puertas automaticas

        DB::table('articles')->insert([
            'name' => 'corredizas central y lateral',
            'slug' => 'corredizas-central-y-lateral',
            'description' => 'Las puertas correderas de apertura central y lateral son las puertas automáticas más populares y funcionales y aportan un toque de distinción y elegancia a cualquier ambiente de forma sencilla.
            En una puerta central, las dos hojas móviles se desplazan en sentidos opuestos, dejando libre una amplia zona de paso. Por su parte, la hoja móvil de una corredera lateral se desplaza a derecha o a izquierda liberando la zona de paso en el lateral correspondiente.
            Las puertas correderas centrales y laterales Manusa ofrecen la máxima velocidad de apertura del mercado, junto con la máxima seguridad. Son recomendables en entradas y salidas públicas donde la circulación de personas sea intensa o donde la seguridad de los usuarios esté vinculada a la fluidez del tráfico.
            ',
            'category_id' => 9,
        ]);

        DB::table('articles')->insert([
            'name' => 'telescópicas',
            'slug' => 'telescopicas',
            'description' => 'Son ideales para entradas con limitaciones de espacio, para separaciones de corredores, o donde se requiera una amplitud de paso libre mayor de la habitual, como por ejemplo concesionarios de automóviles.
            Ofrecen la más amplia zona de paso: hasta 2/3 del espacio ocupado por
            la puerta. Se consigue la máxima abertura en el mínimo espacio.
            Telescópica central:
            Puerta corredera de 4 hojas móviles que se desplazan 2 a 2 en sentidos
            opuestos. Las hojas móviles se repliegan unas sobre otras para
            liberar el máximo espacio de paso en el centro de la puerta.
            Telescópica lateral:
            Puerta corredera de 2 hojas móviles que se desplazan lateralmente. Las
            hojas móviles se repliegan unas sobre otras para liberar el máximo
            espacio de paso en uno de los laterales de la puerta.
            ',
            'category_id' => 9,
        ]);

        
        DB::table('articles')->insert([
            'name' => 'semi circulares',
            'slug' => 'semi-circulares',
            'description' => 'Las puertas curvas y semicirculares Manusa permiten la concepción de entradas singulares y elegantes sin renunciar a la funcionalidad de una puerta corredera
            Una puerta curva consiste en una puerta automática de apertura lateral o central de una o dos hojas móviles que se desplazan radialmente.
            La puerta puede ser cóncava o convexa y con diferentes radios y grados de curvatura.
            La combinación de dos puertas curvas permite la creación de
            puertas circulares, ideales para entradas singulares y funcionales al mismo tiempo.
            ',
            'category_id' => 9,
        ]);

        DB::table('articles')->insert([
            'name' => 'sistema anti pánico',
            'slug' => 'sistema-anti-panico',
            'description' => 'Las puertas automáticas con mecanismo antipánico de Manusa combinan la funcionalidad de una puerta corredera con la posibilidad de abatimiento de las hojas, permitiendo así maximizar la zona de paso.
            La puerta funciona en modo normal (corredera y automática). En caso de emergencia, las hojas se abaten por simple empuje manual hacia el exterior y se repliegan en los laterales, para permitir un amplio paso libre de evacuación.
            Una puerta antipánico está recomendada en edificios públicos como aeropuertos, estaciones o grandes superficies o en instalaciones donde puntualmente se precise un área de acceso de dimensiones mayores a la habitual.
            ',
            'category_id' => 9,
        ]);


        //Puertas revolventes

        DB::table('articles')->insert([
            'name' => 'contra-explosión',
            'slug' => 'contra-explosion',
            'description' => 'La puerta Manusa está ideada de forma única para permitir el mayor tamaño de apertura posible superando la capacidad de cualquier otro sistema comparable en el mercado hasta la fecha. Por lo tanto, podemos asegurar que el nuestro es el sistema de puerta corredera más grande jamás probado para la clasificación de explosión ISO 16933 EXV25.
            Un atributo de rendimiento único de nuestro sistema de puertas es que después de un estallido, la resistencia estructural permite que las puertas sigan operando manualmente, lo que en términos reales supone una mayor rapidez de acceso de los servicios de emergencia y de evacuación del edificio.
            ',
            'category_id' => 10,
        ]);

        DB::table('articles')->insert([
            'name' => 'contra fuego',
            'slug' => 'contra-fuego',
            'description' => 'La puerta Manusa está ideada de forma única para permitir el mayor tamaño de apertura posible superando la capacidad de cualquier otro sistema comparable en el mercado hasta la fecha. Por lo tanto, podemos asegurar que el nuestro es el sistema de puerta corredera más grande jamás probado para la clasificación de explosión ISO 16933 EXV25.
            Un atributo de rendimiento único de nuestro sistema de puertas es que después de un estallido, la resistencia estructural permite que las puertas sigan operando manualmente, lo que en términos reales supone una mayor rapidez de acceso de los servicios de emergencia y de evacuación del edificio.
            ',
            'category_id' => 10,
        ]);

        DB::table('articles')->insert([
            'name' => 'BRT',
            'slug' => 'brt',
            'description' => 'Es un sistema integrado de puertas automáticas para estaciones de líneas BRT que sincroniza la apertura y cierre de las puertas de la dársena y del autobús de una forma automática, coordinada y segura.
            Los sistemas de control BRT de Manusa están concebidos para un uso intensivo y son perfectamente adaptables a cualquier infraestructura, ya que incluso puede llegar a crearse en base a ella.
            Las puertas automáticas para cierre de dársena están compuestas por un operador Manusa, el operador para puerta automática que ofrece las más elevadas prestaciones, y una serie de hojas móviles y fijas que forman un conjunto modular, por lo que son adaptables a cualquier infraestructura, tanto nueva como en uso. Para garantizar la seguridad del usuario las puertas disponen de diversos sensores y dispositivos de seguridad.
            ',
            'category_id' => 10,
        ]);

        //Puertas de quirofano

        DB::table('articles')->insert([
            'name' => 'puertas para quirófano corredizas',
            'slug' => 'puertas-para-quirofano-corredizas',
            'description' => 'Una puerta hermética sirve para aislar espacios, nuestras puertas garantizan esos mismos más una estética y funcionalidad.
            Para garantizar la correcta hermeticidad, la hoja realiza un descenso de 15 mm hacia el suelo y una aproximación de 10 mm al marco para sellar herméticamente el perímetro del hueco
            El marco block asegura el perfecto ajuste con la hoja y garantiza la hermeticidad sobre cualquier tipo de pared permitiendo revestir el hueco con el mismo acabado que la hoja
            Son fabricada en HPL o resina fenólica de alta densidad uso hospitalario, acero inoxidable o en empanelada en vidrio con función touch
            ',
            'category_id' => 11,
        ]);

        DB::table('articles')->insert([
            'name' => 'puertas para quirófano batientes',
            'slug' => 'puertas-para-quirofano-batientes',
            'description' => 'Una puerta hermética sirve para aislar espacios, nuestras puertas garantizan esos mismos más una estética y funcionalidad
            La hoja queda sellada por la lateral y superior garantizando la hermeticidad. Dispone de un mecanismo que desliza contra el suelo para asegurar el sellado en su parte inferior
            El marco block asegura el perfecto ajuste con la hoja y garantiza la hermeticidad sobre cualquier tipo de pared permitiendo revestir el hueco con el mismo acabado que la hoja
            Son fabricada en HPL o resina fenólica de alta densidad uso hospitalario o en acero inoxidable
            ',
            'category_id' => 11,
        ]);

        DB::table('articles')->insert([
            'name' => 'puertas para cuidados intensivos',
            'slug' => 'puertas-para-cuidados-intensivos',
            'description' => 'Puertas herméticas acristaladas Clear View permiten aislar salas de observación sin perder visibilidad del interior de las mismas. Para momentos puntales en que se requiera cierto grado de privacidad, existe la opción de vidrio electropolarizado o vidriopantalla.    Debido a su alta transparencia permiten un  mayor control de la sala hacia el interior de la misma, de la mano que toda puerta manusa ofrece baterías incluidas en sus puertas para poder abrir libremente en caso de emergencia, así como con la opción de poder controlarlas por medio de un software para poder manejar toda la sala a través de una persona.
            ',
            'category_id' => 11,
        ]);

        DB::table('articles')->insert([
            'name' => 'puertas para rayos x',
            'slug' => 'puertas-para-rayos-x',
            'description' => 'Puertas emplomadas: para salas de radiología garantizando así el aislamiento de los espacios gracias a su lámina de plomo de 2 mm., tanto en la hoja como en la mirilla misma, pudiendo llegar a ser herméticas o no de acuerdo a la función o necesidad de la sala.
            El aislamiento contiene dos capas de plomo de 1 mm que se solapan con las inserciones de plomo de las paredes de la sala de radiología (materiales de muro por construcción), para asegurar un perfecto aislamiento
            Son fabricada en HPL o resina fenólica de alta densidad uso hospitalario o en acero inoxidable
            ',
            'category_id' => 11,
        ]);

        //Puertas rapidas

        DB::table('articles')->insert([
            'name' => 'puertas rápidas autorreparables 100 sr',
            'slug' => 'puertas-rapidas-autoreparables-100-sr',
            'description' => 'La puerta Autorreparable® Controlsa es la mejor solución para los accesos y las separaciones de áreas. En fabricación y constante renovación desde 1994, la puerta Autorreparable® ha ido incorporando los últimos avances electrónicos desde su primera versión. La inclusión de un cuadro de mando completamente electrónico, así como de su exclusivo sistema patentado de guiaje y control desde su creación, ha marcado una diferencia en el sector. Dicho sistema permite que en caso de impacto contra la lona, ésta se desprenda de las guías para volver a introducirse automáticamente al subir la puerta con sólo pulsar un botón, por lo que los costes de reparación y mantenimiento se reducen al mínimo.',
            'category_id' => 12,
        ]);

        DB::table('articles')->insert([
            'name' => 'puertas rápidas reforzadas para interiores 10ri',
            'slug' => 'puertas-rapidas-reforzadas-para-interiores-10ri',
            'description' => 'La puerta Reforzada Interior Controlsa es el resultado de una unión entre la puerta Autorreparable y la puerta Reforzada de Exterior Controlsa; diseñada para lugares donde existan correintes de aire y se necesite una comunicación eficiente entre varias zonas. Esta puerta dispone de unos refuerzos horiontales en toda su apertura de luz, pudiendo llevar el sistema Autorreparable® en los primeros 1400 mm. de recorrido desde el suelo. Con la puerta Reforzada Interior Controlsa se consigue un tránsito ágil y rápido entre dos áreas interiores, así como un mejor funcionamiento en cabinas presurizadas',
            'category_id' => 12,
        ]);

        DB::table('articles')->insert([
            'name' => 'puertas rápidas reforzadas para exteriores 120RE',
            'slug' => 'puertas-rapidas-reforzadas-para-exteriores-120RE',
            'description' => 'La puerta Reforzada Exterior Controlsa es la mejor solución para ubicaciones expuestas directamente a zonas exteriores y/o con grandes presiones de aire. Está dotada de refuerzos flexibles que dan a la lona rigidez y facilitan el enrollado de la misma. Dependiendo de la intensidad de la presión del aire, puede variar el número de refuerzos flexibles a lo largo de la hoja de PVC.',
            'category_id' => 12,
        ]);

        DB::table('articles')->insert([
            'name' => 'puertas rápidas reforzadas de doble lona 150DL',
            'slug' => 'puertas-rapidas-reforzadas-de-doble-lona-150DL',
            'description' => 'La puerta Reforzada Exterior Controlsa es la mejor solución para ubicaciones expuestas directamente a zonas exteriores y/o con grandes presiones de aire. Está dotada de refuerzos flexibles que dan a la lona rigidez y facilitan el enrollado de la misma. Dependiendo de la intensidad de la presión del aire, puede variar el número de refuerzos flexibles a lo largo de la hoja de PVC.',
            'category_id' => 12,
        ]);

        DB::table('articles')->insert([
            'name' => 'puertas rápidas autoreparable reforzada exterior 140RA',
            'slug' => 'puertas-rapidas-autoreparable-reforzada-exterior-140RA',
            'description' => 'Es la mejor solución para ubicaciones expuestas directamente a zonas exterior y/o con grandes presiones de aire. Está dotada de refuerzos flexibles que dan a la lona rigidez y facilitan el enrollado de la misma. Dependiendo de la intensidad de la presión de aire, puede variar el número de refuerzos flexibles a lo largo de la hoja de PVC. Incorpora un sistema que permite, en caso de impacto contra la lona, que esta se desprenda de las guías para volver a introducirse automáticamente al subir la puerta con sólo pulsar un botón, por lo que los costes de reparación y mantenimiento se reducen al mínimo. ',
            'category_id' => 12,
        ]);

        DB::table('articles')->insert([
            'name' => 'puertas rápidas autorreparable atex 105 EX',
            'slug' => 'puertas-rapidas-autoreparable-atex-105-ex',
            'description' => 'La mejor solución para un acceso rápido y seguro entre áreas interiores. Incorpora un sistema que permite, en caso de impacto contra la lona, que ésta se desprenda de las guías para volver a introducirse automáticamente al subir la puerta con sólo pulsar un botón, por lo que los costes de reparación y mantenimiento se reducen al mínimo.',
            'category_id' => 12,
        ]);

        DB::table('articles')->insert([
            'name' => 'puertas rápidas autorreparable para laboratorios 114RL',
            'slug' => 'puertas-rapidas-autoreparable-para-laboratorios-114RL',
            'description' => 'Es la mejor solución para los accesos y las separaciones de áreas interiores, especialmente indicada para ubicaciones donde limpieza y conservación del aire son imprescindibles, como laboratorios, proporcionando un acceso rápido y seguro.
            Incorpora un sistema que permite, en caso de impacto contra la lona, que ésta se desprenda de las guías para volver a introducirse automáticamente al subir la puerta con sólo pulsar un botón, por lo que los costes de reparación y mantenimiento se reducen al mínimo.',
            'category_id' => 12,
        ]);

        DB::table('articles')->insert([
            'name' => 'puertas rápidas autorreparable frigorífica 104',
            'slug' => 'puertas-rapidas-autoreparable-frigorifica-104',
            'description' => 'Es la mejor solución para los accesos y las separaciones de cámaras de congelación, que requieran un acceso rápido y seguro. Incorpora un sistema que permite, en caso de impacto contra la lona, que ésta se desprenda de las guías para volver a introducirse automáticamente al subir la puerta con sólo pulsar un botón, por lo que los costes de reparación y mantenimiento se reducen al mínimo.
            ',
            'category_id' => 12,
        ]);


        DB::table('articles')->insert([
            'name' => 'puertas rápidas doble frigo de congelación 200BN',
            'slug' => 'puertas-rapidas-dobles-frigo-de-congelacion-200BN',
            'description' => 'Puerta corredera que aposta por la innovación en el ámbito de los cerramientos de cámaras frigoríficas y presentó el primer prototipo de la Biport® Frigo, su nueva patente internacional. Ideada en base a la tendencia de mercado,la Biport® Frigo une en un solo producto rapidez y estanqueidad, y al mismo tiempo supone una reducción de costes y mantenimiento. El cerramiento se compone de una puerta parar una cámara frigorífica -de conservación o congelación- y una puerta enrollable rápida que puede ser Autorreparable® en caso de temperatura positiva. Su punto fuerte reside en el guiaje de la puerta enrollable rápida, que se realiza por el mismo marco de la puerta frigorífica. Eso permite que todos los componentes de la puerta enrollable rápida puedan colocarse en el exterior de la cámara, evitando así problemas de condensación, hielo o escarcha incluso en la lona, que queda recogida en el tambor al exterior de la cámara una vez está en reposo el sistema. La Biport® Frigo se integra en cualquier hueco, une dos productos en uno y centraliza el control de ambos productos pudiendo realizar programas de funcionamiento a medida.
            ',
            'category_id' => 12,
        ]);

        DB::table('articles')->insert([
            'name' => 'puertas rápidas doble frigo de conservación 200BP',
            'slug' => 'puertas-rapidas-dobles-frigo-de-conservación-200BP',
            'description' => 'La Biport® Frigorífica, ganadora del Premio Palexpo 2005 reúne en un sólo producto rapidez y estanqueidad, al mismo tiempo que supone una reducción de costes y mantenimiento.
            El cerramiento se compone de una puerta para cámara frigorífica (congelación) y una puerta enrollable.
            Su punto fuerte reside en el guiaje de la puerta enrollable, que se realiza por el mismo marco de la puerta frigorífica. Esto permite que todos los componentes de la puerta enrollable puedan colocarse en el exterior de la cámara, evitando así problemas de condensación, hielo o escarcha incluso en la lona, que queda recogida en el tambor al exterior de la cámara una vez está en reposo el sistema.
            ',
            'category_id' => 12,
        ]);

        DB::table('articles')->insert([
            'name' => 'puertas rápidas biport exterior 210 BE',
            'slug' => 'puertas-rapidas-biport-exterior-210-BE',
            'description' => 'Este nuevo producto de Controlsa aúna en un solo producto rapidez y seguridad, y al mismo tiempo supone de nuevo una reducción de costes y mantenimiento. El cerramineto se compone de una puerta enrollable metálica -para el cierre de la nave mientras no se trabaja- y una puerta enrollable rápida que puede ser Autorreparable® en caso de cierre intermedio entre naves -para el tránsito habitual y el horario de trabajo-. Su punto fuerte reside en el guiaje de la puerta enrollable rápida, que se realiza por el mismo marco de la puerta enrollable metálica. Eso permite que todos los componentes de la puerta enrollable rápida puedan colocarse en el mismo punto, uno debajo del otro, de manera que una misma empresa suministra ambos productos en un solo desplazamiento, con un mayor ahorro de espacio y una menor pérdida de temperatura, así como con un importante ahorro de costes de montaje, mantenimiento y mano de obra.La Biport® Exterior se integra en cualquier hueco, une dos productos en uno y centraliza el control de ambos productos pudiendo realizar programas de funcionamiento a medida.
            ',
            'category_id' => 12,
        ]);

        DB::table('articles')->insert([
            'name' => 'puertas rápidas biport contrafuegos EI 90 230 BC',
            'slug' => 'puertas-rapidas-biport-contrafuegos-ei-90-230-bc',
            'description' => 'La Biport® Cortafuegos, es la nueva solución de Controlsa que integra en un sólo sistema el montaje una puerta enrollable para la separación de áreas y rápido acceso y una puerta corredera cortafuegos que actúa como barrera frente al fuego y el calor. La puerta Biport®Cortafuegos es una revolución en instalaciones donde son necesarias ambas funciones suponiendo una reducción de costes, mantenimiento y espacio.
            El cerramiento se compone de una puerta corredera cortafuegos y una puerta enrollable Controlsa S.A., pudiendo ser ésta Autorreparable®, la cual incorpora un sistema que permite, en caso de impacto contra la lona, que ésta se desprenda de las guías para volver a introducirse automáticamente al subir la puerta con sólo pulsar un botón, por lo que los costes de reparación y mantenimiento se reducen al mínimo.            
            ',
            'category_id' => 12,
        ]);

        DB::table('articles')->insert([
            'name' => 'puertas correderas de conservación 800FC',
            'slug' => 'puertas-correderas-de-conservacion-800FC',
            'description' => 'La puerta Corredera Frigorífica de Conservación, es un nuevo producto de CONTROLSA S.A. que reúne en un sólo producto rapidez, estanqueidad y funcionalidad. El cerramiento se compone de una puerta corredera para cámaras frigoríficas de conservación. Un aspecto importante de este nuevo producto es la sencillez y facilidad para montaje y uso.
            El sistema de la puerta Corredera Frigorífica se integra en cualquier hueco, es un producto al que se le puede realizar programas a medida. Es perfecto para instalar en cámaras frigoríficas en cualquier tipo de industria o empresa.
            ',
            'category_id' => 12,
        ]);

        DB::table('articles')->insert([
            'name' => 'puertas correderas de congelación 800CN',
            'slug' => 'puertas-correderas-de-congelacion-800CN',
            'description' => 'La puerta Corredera Frigorífica de Congelación, es un nuevo producto de CONTROLSA S.A. que reúne en un sólo producto rapidez, estanqueidad y funcionalidad. El cerramiento se compone de una puerta corredera para cámaras frigoríficas de congelación. Un aspecto importante de este nuevo producto es la sencillez y facilidad para montaje y uso.
            El sistema de la puerta Corredera Frigorífica se integra en cualquier hueco, es un producto al que se le puede realizar programas a medida. Es perfecto para instalar en cámaras frigoríficas en cualquier tipo de industria o empresa.
            ',
            'category_id' => 12,
        ]);

        DB::table('articles')->insert([
            'name' => 'puertas pivotantes para frío 810FP',
            'slug' => 'puertas-pivotantes-para-frio-810FP',
            'description' => 'La puerta pivotante frigorífica de Controlsa es la solución ideal para el paso peatonal en cámaras e instalaciones frigoríficas, tanto para temperaturas de conservación como de congelación.
            Una solución ideal para instalaciones en las que se requieran un paso práctico, estético y limpio, y un aislamiento adecuado para la perfecta conservación de los productos del interior y reducción de las pérdidas energéticas.
            ',
            'category_id' => 12,
        ]);


        //Rampas de anden

        DB::table('articles')->insert([
            'name' => 'rampa hidráulica',
            'slug' => 'rampa-hidraulica',
            'description' => 'INSULADA PARA AREAS REFRIGERADAS GH-MCGUIRE: La rampa niveladora de andén insulada está diseñada teniendo en cuenta la confiabilidad y la resistencia para sus aplicaciones de servicio mediano a más liviano. El "HP" ofrece la misma operación fácil y uniforme del botón pulsador de la serie H de servicio pesado y la misma seguridad, durabilidad y resistencia incorporadas. La limpieza fácil y el mantenimiento son características de todos los niveladores McGuire. Su presupuesto, su seguridad y su servicio sin problemas son siempre el número uno con McGuire. En la mayoría de los casos, también se montan en un foso preformado en el muelle que se usa comúnmente para reducir la pendiente entre el piso del muelle y la plataforma del remolque. Varios tamaños y capacidades permiten una gran cantidad de flexibilidad. Los niveladores hidráulicos han agregado características de seguridad y ahorran tiempo en la operación y el mantenimiento. Equipada con un recubrimiento de poliuretano expandido, crea una capa protectora que evita el traspaso de calor y evitando un “puente térmico”, volviéndola ideal para zonas refrigeradas.',
            'category_id' => 13,
        ]);

        DB::table('articles')->insert([
            'name' => 'rampa de patio GH-MacGuire',
            'slug' => 'rampa-de-patio-GH-MacGuire',
            'description' => 'PORTATIL ACCESO:La rampa del patio permite que el tráfico se mueva desde el nivel del muelle hacia el suelo o desde el suelo hacia la parte trasera de un camión, lo que ayuda a que la carga / descarga fluya sin problemas. Las llantas neumáticas industriales de caucho sólido de 18 "permiten un fácil movimiento de la rampa alrededor de su patio de embarque para que esté listo en minutos para comenzar la carga / descarga. El sistema de ajuste hidráulico permite un ajuste rápido y confiable de la altura de la rampa del patio con prácticamente cualquier altura del lecho del remolque
            ',
            'category_id' => 13,
        ]);

        DB::table('articles')->insert([
            'name' => 'rampa hidráulica de anden gh-mcguire serie hp',
            'slug' => 'rampa hidraulica-de-anden-gh-mcguire-serie-hp',
            'description' => 'La rampa de andén hidráulica de la serie HP está diseñado teniendo en cuenta la confiabilidad y la resistencia para sus aplicaciones de servicio mediano a liviano. El "HP" ofrece la misma operación fácil y uniforme del botón pulsador de la serie H de servicio pesado y la misma seguridad, durabilidad y resistencia incorporadas. La limpieza fácil y el mantenimiento son características de todos los niveladores McGuire. Su presupuesto, su seguridad y su servicio sin problemas son siempre el número uno con McGuire. En la mayoría de los casos, también se montan en un foso preformado en el muelle que se usa comúnmente para reducir la pendiente entre el piso del muelle y la plataforma del remolque. Varios tamaños y capacidades permiten una gran cantidad de flexibilidad. Los niveladores hidráulicos han agregado características de seguridad y ahorran tiempo en la operación y el mantenimiento.',
            'category_id' => 13,
        ]);

        DB::table('articles')->insert([
            'name' => 'rampa mecanica ghmcguire serie mp',
            'slug' => 'rampa-mecanica-gh-mcguire-serie-mp',
            'description' => 'La rampa mecánica de andén de la serie MP permite la activación de la cadena de tracción de liberación de la punta del dedo con un funcionamiento suave y confiable a través de un contrapeso de leva y rodillo para garantizar una marcha suave y confiable hacia la plataforma del remolque con capacidad para el muelle debajo. Los flotadores de diseño de sujeción con remolques de aire y la bisagra de compresión trasera de ancho completo están diseñados para una resistencia superior. Diseñado para satisfacer su presupuesto y ofrecerle años de servicio sin problemas. El diseño del bastidor auxiliar permite una limpieza y servicio fáciles, un sello de todos los niveladores McGuire. El "MP" está hecho teniendo en cuenta la seguridad, el servicio sin problemas y su presupuesto. En la mayoría de los casos, también se montan en un foso preformado en el muelle que se usa comúnmente para reducir la pendiente entre el piso del muelle y la plataforma del remolque. Varios tamaños y capacidades permiten una gran cantidad de flexibilidad.',
            'category_id' => 13,
        ]);

        DB::table('articles')->insert([
            'name' => 'rampa hidráulica de labio muelle',
            'slug' => 'rampa-hidraulica-de-labio-muelle',
            'description' => 'El borde de la serie HED de niveladores de muelle representa una unidad hidráulica de bajo costo que cubre el espacio entre el edificio y el camión, donde existe una variación mínima entre el muelle y el camión con un rango de trabajo recomendado de +/- 3 "y un rango de funcionamiento máximo de + / -5 ” por encima y por debajo del nivel del muelle. Un control de un solo botón estándar de Nema 4 proporciona una fácil activación de la plataforma y el borde.
            El "HED" tiene un funcionamiento silencioso y confiable a través de un diseño de dos cilindros con cubierta y cilindros de labio. El motor / bomba se monta en un área de fácil acceso en un estante debajo de la unidad. El "HED" viene completo con funciones de restauración automática e hidráulica. Una vez que el remolque se retira, la unidad se almacena automáticamente y si el remolque permanece en la unidad de muelle se puede almacenar hidráulicamente sin la necesidad de mover el remolque. Está aprobado por la oficina de correos con el uso de un protector de escurrimiento alto de 3 "para el carro de correo y la protección del personal. El uso de un borde de 17 "disponible permite al HED dar servicio a los remolques refrigerados.
            ',
            'category_id' => 13,
        ]);

        DB::table('articles')->insert([
            'name' => 'rampa de muelle accionado por aire',
            'slug' => 'rampa-de-muelle-accionado-por-aire',
            'description' => 'La rampa niveladora de andén neumática de la serie MA está diseñado para proporcionar una operación neumática de botón fácil junto con confiabilidad y resistencia en aplicaciones ligeras a medianas a algunas de trabajo pesado. El "MA" ofrece una alternativa práctica para lograr un funcionamiento fácil y uniforme del botón pulsador como el sistema hidráulico "H" y "HP" con la misma seguridad, durabilidad y resistencia incorporadas. La facilidad de limpieza y servicio son características de todos los niveladores McGuire. Su presupuesto, su seguridad y su servicio sin problemas siguen siendo el número uno con McGuire. En la mayoría de los casos, también se montan en un foso preformado en el muelle que se usa comúnmente para reducir la pendiente entre el piso del muelle y la plataforma del remolque. Varios tamaños y capacidades permiten una gran cantidad de flexibilidad.
            Los niveladores neumáticos "MA" tienen funciones de seguridad integradas y ahorran tiempo en la operación y el mantenimiento.',
            'category_id' => 13,
        ]);

        DB::table('articles')->insert([
            'name' => 'rampa mecánica de labio medlf',
            'slug' => 'rampa-mecanica-de-labio-medlf',
            'description' => 'Las series de niveladores de muelles de la serie MEDLF son unidades de bajo costo destinadas a una flota cautiva de camiones con una altura de plataforma similar. Normalmente se montan en la cara del muelle y se pueden colocar en un hoyo empotrado pequeño. Esta es una alternativa de bajo costo para trabajo liviano al nivelador de muelle de tamaño completo estilo de hoyo. También se usa cuando no se puede utilizar un foso o como modificación. La serie "MEDLF" se usa normalmente en un entorno con una diferencia mínima entre la plataforma del remolque y el muelle, y la unidad se monta típicamente en la superficie del muelle. La operación es un proceso de dos pasos con un asa "sin elevación" para colocar la unidad en el remolque.',
            'category_id' => 13,
        ]);

        DB::table('articles')->insert([
            'name' => 'rampa hidráulica de almacenamiento vertical',
            'slug' => 'rampa-hidraulica-de-almacenamiento-vertical',
            'description' => 'SERIE VSH: McGuire ofrece una rampa vertical hidráulica para satisfacer cualquiera de las necesidades de su equipo de muelle, al tiempo que ofrece bajos costos de propiedad de por vida, la mejor seguridad integrada y años de servicio sin problemas.
            El nivelador VSH ofrece un control ambiental inigualable para aplicaciones sensibles a la temperatura. El diseño de almacenamiento vertical proporciona el sello ambiental más apretado cuando no está en uso. La conveniencia del botón pulsador de VSH proporciona una operación suave y consistente combinada con una excelente dureza y confiabilidad.
            Los niveladores VSH de McGuire se pueden instalar en un solo hoyo preformado o en un hoyo de estante más largo para múltiples unidades. Varios tamaños y capacidades permiten una gran cantidad de flexibilidad.',
            'category_id' => 13,
        ]);

        DB::table('articles')->insert([
            'name' => 'rampa hidráulica para muelle de ferrocarril',
            'slug' => 'rampa-hidraulica-para-muelle-de-ferrocarril',
            'description' => 'SERIE RRH: El nivelador de rampa para vagones de la serie RRH está diseñado estructuralmente para las aplicaciones más exigentes, con la facilidad de presionar un botón para lograr un funcionamiento uniforme y uniforme, además de una resistencia y confiabilidad sobresalientes en sus operaciones de atraque ferroviario más desafiantes. McGuire ofrece un nivelador de muelle hidráulico con rampa de riel para satisfacer sus necesidades de muelles, al tiempo que ofrece bajos costos de propiedad de por vida y años de servicio sin problemas con la mejor seguridad integrada de la industria. Normalmente se montan en la cara de la pared, pero también se pueden colocar en un hoyo empotrado corto. Varios tamaños y capacidades permiten flexibilidad. Los niveladores de rampa de rieles hidráulicos han agregado características de seguridad y ahorran tiempo en la operación y mantenimiento.',
            'category_id' => 13,
        ]);

        DB::table('articles')->insert([
            'name' => 'ganchos para andén de retención de camiones',
            'slug' => 'ganchos-para-anden-de-retencion-de-camiones',
            'description' => 'GANCHO PARA ANDÉN DE VEHÍCULO AUTOMÁITCO HOLD-TITE
            El sistema de retención automático del vehículo Hold-Tite® tiene activación con botón pulsador con controles de estado sólido PLC (115V / 1PH) y un diseño de bajo perfil, sin impacto para montaje en pared o camino de entrada. Equipado con una verdadera fuerza de restricción hidráulica positiva, elimina virtualmente el "arrastre del remolque", una de las principales causas de incidentes en el muelle de carga. Viene de serie con restauración automática y un indicador luminoso de precaución ámbar si un remolque no tiene RIG (protector de impacto trasero) o una RIG muy dañada. La anulación codificada para la condición de interbloqueo y la secuenciación automática de la luz para indicar RIG o no RIG son algunas de las características de seguridad sobresalientes.     
            El retenedor automático del vehículo Hold-Tite® está diseñado para durar con una garantía básica total de dos (2) años en componentes estructurales, hidráulicos y eléctricos y tres (3) años adicionales en estructural. También cumple con todas las regulaciones actuales de la NHTSA.',
            'category_id' => 13,
        ]);

        DB::table('articles')->insert([
            'name' => 'ganchos para andén para vehículo tpr unlock automático',
            'slug' => 'ganchos-para-anden-para-vehiculo-tpr-unlock-automatico',
            'description' => 'El TPR UniLock® es el único sistema de retención del vehículo ubicado en un remolque que puede eliminar automáticamente la presión "RIG Wedge". La cuña RIG se produce cuando el remolque se empuja hacia adelante durante la carga / descarga y la Protección de Impacto Trasero (RIG) del remolque aplica tanta presión al gancho de la restricción que el conductor del camión debe invertir el remolque para liberar la restricción. El UniLock tiene un diseño avanzado de leva que primero gira el gancho para alejarlo del RIG para eliminar la presión, y luego gira hacia una posición almacenada.
            La restricción de vehículos UniLock también tiene un mecanismo de seguridad interno que bloquea el gancho de la restricción en su lugar cuando se aplica presión, manteniendo un acoplamiento seguro. Esto lo hace universalmente efectivo en cualquier Guardia de Impacto Trasero (RIG) obstruido, incluidos los remolques intermodales con placas de cubierta que evitan que el gancho del retenedor se enganche en la parte superior del RIG. 
            El UniLock está diseñado para soportar una fuerza de tracción superior a las 32,000 libras, y tiene un rango de servicio de 4 "a 10" horizontalmente desde la parte frontal de los topes del muelle y de 9 "a 30" verticalmente sobre el enfoque de manejo. El conjunto integral de motor, engranaje y freno está diseñado específicamente para el UniLock. La restricción de vehículos UniLock es altamente adaptable a muelles de carga nuevos o existentes.
            ',
            'category_id' => 13,
        ]);

        DB::table('articles')->insert([
            'name' => 'ganchos para andén para vehículo tpr',
            'slug' => 'ganchos-para-anden-para-vehiculo-tpr',
            'description' => 'El retenedor del vehículo posicionado en el camión McGuire TPR® está diseñado para posicionarse automáticamente y asegurar un protector de impacto trasero (RIG) del remolque para reducir la posibilidad de una separación prematura del remolque durante el proceso de carga / descarga.
            El TPR® está diseñado para resistir una fuerza de tracción superior a las 32,000 libras, y tiene un rango de servicio de 4 "a 10" horizontalmente desde la cara de los topes del muelle y de 9 "a 30" verticalmente sobre el enfoque del variador. El conjunto integral de motor, engranaje y freno está diseñado específicamente para el TPR®. El sistema de retención de vehículos TPR® es altamente adaptable a muelles de carga nuevos o existentes',
            'category_id' => 13,
        ]);

        DB::table('articles')->insert([
            'name' => 'ganchos para andén para vehículo tpr',
            'slug' => 'ganchos-para-anden-para-vehiculo-tpr',
            'description' => '',
            'category_id' => 13,
        ]);

        DB::table('articles')->insert([
            'name' => 'ganchos para andén vehiculos automática stop-tite',
            'slug' => 'ganchos-para-anden-vehiculos-automatica-stop-tite',
            'description' => 'Sujeción automática de camiones de carga
            El sistema de retención de vehículos Stop-Tite® AAL (operación automática, luces automáticas) se opera con la activación del botón pulsador (115V / 1PH). Viene equipado con una barra de sensor RIG que notifica a los trabajadores del muelle con una alarma audible si el brazo del sistema de retención no está enganchado de manera segura con el protector de impacto trasero del remolque.
            El Stop-Tite tiene un diseño de bajo perfil y sin impacto para montaje en pared o camino de entrada. El paquete de energía remoto permite la elección de la ubicación de montaje. Puede montarse junto a la restricción, en la pared exterior lejos del remolque de respaldo, dentro de un pozo nivelador o posicionado dentro del edificio para facilitar el servicio. El interruptor selector de anulación, la alarma sonora si no hay RIG, la secuencia automática de luces de las luces interiores / exteriores de color rojo / verde y los terminales de bloqueo disponibles están diseñados teniendo en cuenta la seguridad.
            El Stop-Tite® AAL viene con una protección protectora contra desechos y un acabado de dicromato de zinc. Cuenta con una garantía base de un (1) año en todos los componentes estructurales, hidráulicos y eléctricos. También cumple con todas las regulaciones actuales de la NHTSA.            ',
            'category_id' => 13,
        ]);

        DB::table('articles')->insert([
            'name' => 'ganchos para andén vehiculos manual stop-tite',
            'slug' => 'ganchos-para-anden-vehiculos-manual-stop-tite',
            'description' => 'RESTICCIÓN MANUAL DE CAMIONES DE ANDÉN El Stop-Tite® M, MML y MAL son restricciones de vehículo activadas manualmente a través de una palanca de operación. Tienen un diseño de bajo perfil y sin impacto para montaje en pared y camino de entrada. Los tres (3) tipos tienen una protección protectora contra desechos y un acabado de dicromato de zinc. 
            La versión M es de operación manual y solo para señales. La versión MML es una operación manual y un sistema de comunicación operado manualmente cambiado a través de un interruptor selector en un panel de control interno que secuencia las luces rojas / verdes interiores / exteriores. La versión MAL viene equipada con un interruptor que secuenciará automáticamente las luces rojas / verdes interiores / exteriores. El MAL también tiene una barra de sensores RIG que notifica a los trabajadores del muelle con una alarma audible si el brazo de la restricción no está enganchado de manera segura con el protector de impacto trasero del remolque. Las tres (3) versiones cuentan con una garantía base de un (1) año en todos los componentes estructurales, hidráulicos y eléctricos.',
            'category_id' => 13,
        ]);

        //Sellos

        DB::table('articles')->insert([
            'name' => 'cabezal cortina fijo cc',
            'slug' => 'cabezal-cortina-fijo-cc',
            'description' => 'Sello de andén con cabezal cortina fijo para sellar en vehículos con diferentes alturas, compuesto de piernas de sección trapezoidal para aumentar el uso del ancho vehicular, así como facilitar el alineamiento del camión del sello.
            Equipado con escapes de aire laterales exteriores en las piernas para reducir el estrés en la compresión
            Señalización con lona de PVC amarilla para guiar al camión',
            'category_id' => 14,
        ]);

        DB::table('articles')->insert([
            'name' => 'sello de andén sólido fijo',
            'slug' => 'sello-de-anden-solido-fijo',
            'description' => 'Sello de andén para descarga Sólido Fijo que con un cabezal compresible para máximo sellado superior, compuesto por piernas trapezoidales para aumentar el uso del ancho vehicular así como facilitar el alineamiento del camión al sello.
             Equipado con escapes de aire laterales exteriores en las piernas para reducir el estrés en la compresión. Señalización con lona de PVC amarilla para guiar al camión',
            'category_id' => 14,
        ]);

        DB::table('articles')->insert([
            'name' => 'sello de andén cabezal combinado o cabezal sólido-cortina fijo',
            'slug' => 'sello-de-andén-cabezal-combinado-o-cabezal-solido-cortina-fijo',
            'description' => 'Sello de andén Cabezal Combinado para máximo sellado en vehículos con diferentes alturas, compuesto por piernas trapezoidales  para aumentar el uso del ancho vehicular así como facilitar el alineamiento del camión al sello
            Equipado con escapes de aire laterales exteriores en las piernas para reducir el estrés en la compresión
            Ojillos en las bases de las piernas y el cabezal sólido para drenar el agua pluvial acumulada
            Señalización con lona de PVC amarilla para guiar al camión',
            'category_id' => 14,
        ]);

        DB::table('articles')->insert([
            'name' => 'sello de andén cabezal cortina ajustable pull-cord',
            'slug' => 'sello-de-anden-cabezal-cortina-ajustable-pull-cord',
            'description' => 'Sello de andén Pull-Cord ajustable en vehículos con grandes diferencias de alturas, compuesto por piernas trapezoidales para aumentar el uso del ancho vehicular así como facilitar el alineamiento del camión al sello con lona de 40 Oz.
            Equipado con escapes de aire laterales exteriores en las piernas para reducir el estrés en la compresión
            Ojillos en las bases de las piernas y el cabezal sólido para drenar el agua pluvial acumulada
            Señalización con lona de PVC amarilla para guiar al camión',
            'category_id' => 14,
        ]);

        DB::table('articles')->insert([
            'name' => 'sello  andén cortina ajustable pull-cord',
            'slug' => 'sello-anden-cortina-ajustable-pull-cord',
            'description' => 'Cabezal sólido fijo compresible para máximo sellado superior, o cabezal cortina ajustable para sellar en vehículos con grandes diferencias de alturas.
            Equipado con escapes de aire laterales exteriores en las piernas para reducir el estrés en la compresión
            Ojillos en las bases de las piernas y el cabezal sólido para drenar el agua pluvial acumulada
            Señalización con lona de PVC amarilla para guiar al camión',
            'category_id' => 14,
        ]);

        DB::table('articles')->insert([
            'name' => 'sello de andén cortina fija piernas sección L',
            'slug' => 'sello-de-anden-cortina-fija-piernas-seccion-L',
            'description' => 'CCabezal cortina fija para sellar vehículos con diferentes alturas, con piernas en sección “L” para aumentar el uso del ancho vehicular, facilitando el alineamiento del camión al sello y evitar estorbos a los lados del camión como con los sellos estándares
            Equipado con escapes de aire laterales exteriores en las piernas para reducir el estrés en la compresión
            Ojillos en las bases de las piernas y el cabezal sólido para drenar el agua pluvial acumulada
            Señalización con lona de PVC amarilla para guiar al camión',
            'category_id' => 14,
        ]);

        
        DB::table('articles')->insert([
            'name' => 'sello de andén cabezal sólido piernas sección L',
            'slug' => 'sello-de-anden-cabezal-solido-piernas-seccion-L',
            'description' => 'Cabezal sólido fijo compresible para máximo sellado de vehículos, con piernas en sección “L” para aumentar el uso del ancho vehicular, facilitando el alineamiento del camión al sello y evitar estorbos a los lados del camión como con los sellos estándares
            Equipado con escapes de aire laterales exteriores en las piernas para reducir el estrés en la compresión
            Ojillos en las bases de las piernas y el cabezal sólido para drenar el agua pluvial acumulada
            Señalización con lona de PVC amarilla para guiar al camión',
            'category_id' => 14,
        ]);

        DB::table('articles')->insert([
            'name' => 'sello de andén de estructura rígida fija',
            'slug' => 'sello-de-anden-de-estructura-rigida-fija',
            'description' => 'Shelter para acceso de andén con una cortina superior asegurada para ofrecer el máximo rendimiento para pareas refrigeradas o en un entorno de tráfico inenso con la capacidad de adaptarse a diferentes medidas de camión
            Equipado con escapes de aire laterales exteriores en las piernas para reducir el estrés en la compresión
            Ojillos en las bases de las piernas y el cabezal sólido para drenar el agua pluvial acumulada
            Señalización con lona de PVC amarilla para guiar al camión',
            'category_id' => 14,
        ]);

        DB::table('articles')->insert([
            'name' => 'shelter inflable ajustable',
            'slug' => 'shelter-inflable-ajustable',
            'description' => 'Shelter para acceso de andenes que proveen de una protección de 360 grados al momento de realizar maniobras de carga y descarga, compuesta por piernas y cabezal que permiten ajustarse a diferentes medidas de camiones o camionetas de reparto
            Señalización con lonas de PVC amarillas para guiar al camión',
            'category_id' => 14,
        ]);


        //Motores Industriales

        DB::table('articles')->insert([
            'name' => 'Giro ',
            'slug' => 'giro',
            'description' => 'Para cierres enrollables balanceados de hasta 170 kg y 340 kg 
            Motorreductor electromecánico en las versiones reversible e irreversible. 
            Prestaciones elevadas: nuevo bimotor irreversible con potencia de 800 W y fuerza de elevación de hasta 340 Nm. 
            Máxima flexibilidad de uso y reducción de las existencias en el almacén: un único modelo para eje cierre enrollable de 76 mm, que se puede adaptar fácilmente a ejes de 60 y 48 mm, para abarcar las dimensiones más comunes en uso. 
            El diámetro externo de la corona se adapta de 200 mm a 220 o 240 mm, para instalarse en la mayoría de los cierres enrollables.
            Sistema sencillo para el desbloqueo contemporáneo de los dos motores.
            ',
            'category_id' => 15,
        ]);

        DB::table('articles')->insert([
            'name' => 'Rondo ',
            'slug' => 'rondo',
            'description' => 'Para cierres enrollables balanceados de hasta 130 kg y 180 kg 
            Motorreductor electromecánico en las versiones reversible e irreversible. 
            Cuidado: el grupo fin de carrera y los cableados están protegidos con una caja elegante; condensador precableado. 
            Rápida: regulación de las posiciones de fin de carrera en apertura y en cierre, sencilla e intuitiva. Robusto: carcasa totalmente de aluminio 
            Práctico: fi¬nes de carrera electromecánicos en cierre y en apertura, cómodamente regulables Completo: preparado para desbloqueo con cable 
            Completo: con brida de 200 mm y 220 mm, para ejes de 60 mm con adaptadores de 48 mm y 42 mm. 
            Instalación sencilla: mediante el encastre guiado, que permite no sujetar el motor durante la fijación, optimizado con 3 tornillos            
            ',
            'category_id' => 15,
        ]);

        DB::table('articles')->insert([
            'name' => 'GH25/35',
            'slug' => 'GH25-35',
            'description' => 'Operador en 230 Vac para automatizar puertas seccionales y puertas enrollables uso industrial, con maniobra de auxilio manual de cadena.
            Gracias a las reducciones en baño de aceite y los materiales de elevada calidad, garantiza altas prestaciones y máxima fiabilidad.
            Disponible con central de mando separada. 
            Regulación de la posición de los finales de carrera fácil y precisa 
            Seguridad máxima garantizada también en las fases de accionamiento del desbloqueo rápido, gracias a un micro interruptor que interrumpe la alimentación del motor            
            ',
            'category_id' => 15,
        ]);

        //puertas de acero y madera
       
        DB::table('articles')->insert([
            'name' => 'emergencia',
            'slug' => 'emergencia',
            'description' => 'Las salidas de emergencia son puertas de acero fabricadas bajo estándares de certificación corta fuego como UL y Warnock and Hersey, así mismo nos permiten una evacuación controlada a la hora de un incendio y/o cualquier otro evento, contando con certificados contra fuego. Siendo puertas de acero en calibre 18 regularmente colocadas en áreas cerradas con mucha gente o cerca de escaleras.
            Teniendo como función primordial controlar el paso del fuego y del humo dentro de un edificio, para proteger la integridad de las personas dentro del edificio
            Gracias a su sistema de barra de pánico nos permite realizar un egreso y mantener la puerta con un mecanismo que regule esto, de la mano de un cierre controlado gracias a su cierrapuertas el cual tiene como función principal mantener cerrada la puerta después de accionarse.
            ',
            'category_id' => 16,
        ]);

        DB::table('articles')->insert([
            'name' => 'oficina',
            'slug' => 'oficina',
            'description' => 'Las salidas de emergencia son puertas de acero fabricadas bajo estándares de certificación corta fuego como UL y Warnock and Hersey, así mismo nos permiten una evacuación controlada a la hora de un incendio y/o cualquier otro evento, contando con certificados contra fuego. Siendo puertas de acero en calibre 18 regularmente colocadas en áreas cerradas con mucha gente o cerca de escaleras.
            Teniendo como función primordial controlar el paso del fuego y del humo dentro de un edificio, para proteger la integridad de las personas dentro del edificio
            Gracias a su sistema de barra de pánico nos permite realizar un egreso y mantener la puerta con un mecanismo que regule esto, de la mano de un cierre controlado gracias a su cierrapuertas el cual tiene como función principal mantener cerrada la puerta después de accionarse.
            ',
            'category_id' => 16,
        ]);

        DB::table('articles')->insert([
            'name' => 'baños públicos',
            'slug' => 'baños_publicos',
            'description' => 'Nuestras puertas de acero fabricadas bajo estándares de certificación corta fuego como UL y Warnock and Hersey, así mismo nos permiten una evacuación controlada a la hora de un incendio y/o cualquier otro evento, contando con certificados contra fuego de 20 min., 45 min., 60 min., 90 min., y 180 min. Siendo puertas de acero en calibre 18 regularmente colocadas en áreas de baños públicos donde el tráfico es medio-alto

            Teniendo como función primordial controlar el paso del fuego y del humo dentro de un edificio, para proteger la integridad de las personas dentro del edificio
            
            Diseñadas para ponerse en edificios como: Naves industriales, Hoteles, Hospitales o Centros de Convenciones, lugares donde re requieren de puertas de alto desempeño y donde la seguridad sea un objeto principal
            
            Estas puertas se usan para controlar el paso de peatones dentro de áreas para sanitarios públicos donde el uso es constante y requieran de un funcionamiento limpio y práctico
            
            ',
            'category_id' => 16,
        ]);

        DB::table('articles')->insert([
            'name' => 'bodega',
            'slug' => 'bodega',
            'description' => 'Nuestras puertas de acero fabricadas bajo estándares de certificación corta fuego como UL y Warnock and Hersey, así mismo nos permiten una evacuación controlada a la hora de un incendio y/o cualquier otro evento, contando con certificados contra fuego de 20 min., 45 min., 60 min., 90 min., y 180 min. Siendo puertas de acero en calibre 18 regularmente colocadas en áreas de bodega

            Teniendo como función primordial controlar el paso del fuego y del humo dentro de un edificio, para proteger la integridad de las personas dentro del edificio
            
            Diseñadas para ponerse en edificios como: Naves industriales, Hoteles, Hospitales o Centros de Convenciones, lugares donde re requieren de puertas de alto desempeño y donde la seguridad sea un objeto principal
            
            Estas puertas se usan para lugares donde se tengan que guardar cosas de uso cotidiano o simplemente resguardar para el día a día de cualquier empresa, permitiendo controlar el paso de fuego en caso de evento
            ',
            'category_id' => 16,
        ]);

        DB::table('articles')->insert([
            'name' => 'oficina (madera)',
            'slug' => 'oficina-madera',
            'description' => 'Son puertas con certificación corta fuego las cuales tienen como función primordial salva-guardar la integridad de las personas dentro de un edificio, proveyendo de salidas controladas y sencillas Siendo puertas de fabricación especial colocadas en áreas de oficina donde el tráfico es medio-alto y se requiera de mayor diseño y estética
            Teniendo como función primordial controlar el paso del fuego y del humo dentro de un edificio, para proteger la integridad de las personas dentro del edificio
            Diseñadas ponerse en edificios como: Naves industriales, Hoteles, Hospitales o Centros de Convenciones, lugares donde re requieren de puertas de alto desempeño y donde la seguridad sea un objeto principal
            ', 
            'category_id' => 16,
        ]);

        DB::table('articles')->insert([
            'name' => 'baños privados',
            'slug' => 'baños-privados',
            'description' => 'Son puertas con certificación corta fuego las cuales tienen como función primordial salva-guardar la integridad de las personas dentro de un edificio, proveyendo de salidas controladas y sencillas Siendo puertas de fabricación especial colocadas en áreas de baño donde requiera de mayor diseño y estética
            Teniendo como función primordial controlar el paso del fuego y del humo dentro de un edificio, para proteger la integridad de las personas dentro del edificio
            Diseñadas ponerse en edificios como: Naves industriales, Hoteles, Hospitales o Centros de Convenciones, lugares donde re requieren de puertas de alto desempeño y donde la seguridad sea un objeto principal
            ',
            'category_id' => 16,
        ]);

        DB::table('articles')->insert([
            'name' => 'bodega',
            'slug' => 'bodega',
            'description' => 'Son puertas con certificación corta fuego las cuales tienen como función primordial salva-guardar la integridad de las personas dentro de un edificio, proveyendo de salidas controladas y sencillas Siendo puertas de fabricación especial colocadas en áreas de baño donde requiera de mayor diseño y estética
            Teniendo como función primordial controlar el paso del fuego y del humo dentro de un edificio, para proteger la integridad de las personas dentro del edificio
            Diseñadas para ponerse en edificios como: Naves industriales, Hoteles, Hospitales o Centros de Convenciones, lugares donde re requieren de puertas de alto desempeño y donde la seguridad sea un objeto principal
            Estas puertas se usan para lugares donde se tengan que guardar cosas de uso cotidiano o simplemente resguardar para el día a día de cualquier empresa, permitiendo controlar el paso de fuego en caso de evento
            ',
            'category_id' => 16,
        ]);

        DB::table('articles')->insert([
            'name' => 'acceso a habitaciones',
            'slug' => 'acceso-a-habitaciones',
            'description' => 'Son puertas con certificación corta fuego las cuales tienen como función primordial salva-guardar la integridad de las personas dentro de un edificio, proveyendo de salidas controladas y sencillas Siendo puertas de fabricación especial colocadas en áreas de baño donde requiera de mayor diseño y estética
            Teniendo como función primordial controlar el paso del fuego y del humo dentro de un edificio, para proteger la integridad de las personas dentro del edificio            
            Diseñadas para ponerse en edificios como: Naves industriales, Hoteles, Hospitales o Centros de Convenciones, lugares donde re requieren de puertas de alto desempeño y donde la seguridad sea un objeto principal
            Estas puertas otorgan una protección adicional cuando un huésped tenga que evacuar el edificio, proveyendo a este mismo de tiempo suficiente de buscar por una salida de emergencia 
            ',
            'category_id' => 16,
        ]);

        //Corttinas de acero

        DB::table('articles')->insert([
            'name' => 'hiresa 6000',
            'slug' => 'hiresa-6000',
            'description' => 'las cortinas metálicas  de hiresa están diseñadas por computadora con principios y diseños probados en el tiempo, resultando en una puerta enrollable de alto rendimiento y bien construida. 
            ideales para lugares donde el espacio sea reducido y requieran de una puerta que no ocupe mucho espacio y sea muy versátil, adaptándose a diferentes tipos de aperturas y/o fijaciones
            con la modalidad para escoger entre una cortina de operación manual o de operación automática, han sido diseñadas para superar la mayor de las expectativas del mercado
            viniendo así en varios calibres a escoger, las cortinas pueden ocupar diferentes tamaños y/o diseños como: micro-perforada, fenestrada, curva o plana
            ',
            'category_id' => 17,
        ]);


        DB::table('articles')->insert([
            'name' => 'hiresa 7301',
            'slug' => 'hiresa-7301',
            'description' => 'las cortinas enrollables corta fuego de hiresa by chi guardian ™, que se seleccionan con mayor frecuencia para el cumplimiento práctico de la prueba de caída y para asegurar una respuesta positiva a la crisis, brindan resultados confiables, predecibles y repetibles. ahora es posible realizar pruebas de caída seguras, sencillas, económicas y repetibles en cualquier instalación con solo tirar de una manija.
            equipadas con etiquetas de laboratorios como ul (underwriters laboratories), están listadas para cumplir con distintas aplicaciones de muro tanto mampostería como muro. 
            gracias a su diseño le permite cerrar automáticamente cuando en caso de incendio este se eleva y por ende baja para proteger la integridad de las personas dentro del edificio
            nuestras puertas enrollables contra incendios están disponibles en una variedad de medidores, perfiles de listones y colores. también puede elegir entre lanzamientos con demora de tiempo a prueba de fallas, detectores de humo y sistemas de advertencia audible y visual.
            ios calibres a escoger, las cortinas pueden ocupar diferentes tamaños y/o diseños como: micro-perforada, fenestrada, curva o plana
            ',
            'category_id' => 17,
        ]);


        DB::table('articles')->insert([
            'name' => 'hiresa 7302',
            'slug' => 'hiresa-7302',
            'description' => 'las cortinas enrollables corta fuego de hiresa by chi guardian ™, que se seleccionan con mayor frecuencia para el cumplimiento práctico de la prueba de caída y para asegurar una respuesta positiva a la crisis, brindan resultados confiables, predecibles y repetibles. ahora es posible realizar pruebas de caída seguras, sencillas, económicas y repetibles en cualquier instalación con solo tirar de una manija.
            equipadas con etiquetas de laboratorios como ul (underwriters laboratories), están listadas para cumplir con distintas aplicaciones de muro tanto mampostería como muro. 
            gracias a su diseño le permite cerrar automáticamente cuando en caso de incendio este se eleva y por ende baja para proteger la integridad de las personas dentro del edificio
            nuestras puertas enrollables contra incendios están disponibles en una variedad de medidores, perfiles de listones y colores. también puede elegir entre lanzamientos con demora de tiempo a prueba de fallas, detectores de humo y sistemas de advertencia audible y visual.            
            ',
            'category_id' => 17,
        ]);


        DB::table('articles')->insert([
            'name' => 'hiresa 7366',
            'slug' => 'hiresa-7366',
            'description' => 'las cortinas enrollables corta fuego de hiresa by chi guardian ™, que se seleccionan con mayor frecuencia para el cumplimiento práctico de la prueba de caída y para asegurar una respuesta positiva a la crisis, brindan resultados confiables, predecibles y repetibles. ahora es posible realizar pruebas de caída seguras, sencillas, económicas y repetibles en cualquier instalación con solo tirar de una manija.
            equipadas con etiquetas de laboratorios como ul (underwriters laboratories), están listadas para cumplir con distintas aplicaciones de muro tanto mampostería como muro. 
            gracias a su diseño le permite cerrar automáticamente cuando en caso de incendio este se eleva y por ende baja para proteger la integridad de las personas dentro del edificio
            nuestras puertas enrollables contra incendios están disponibles en una variedad de medidores, perfiles de listones y colores. también puede elegir entre lanzamientos con demora de tiempo a prueba de fallas, detectores de humo y sistemas de advertencia audible y visual.
            ',
            'category_id' => 17,
        ]);


        DB::table('articles')->insert([
            'name' => 'hiresa 7400',
            'slug' => 'hiresa-7400',
            'description' => 'las cortinas enrollables corta fuego de hiresa by chi guardian ™, que se seleccionan con mayor frecuencia para el cumplimiento práctico de la prueba de caída y para asegurar una respuesta positiva a la crisis, brindan resultados confiables, predecibles y repetibles. ahora es posible realizar pruebas de caída seguras, sencillas, económicas y repetibles en cualquier instalación con solo tirar de una manija.
            equipadas con etiquetas de laboratorios como ul (underwriters laboratories), están listadas para cumplir con distintas aplicaciones de muro tanto mampostería como muro. 
            gracias a su diseño le permite cerrar automáticamente cuando en caso de incendio este se eleva y por ende baja para proteger la integridad de las personas dentro del edificio
            nuestras puertas enrollables contra incendios están disponibles en una variedad de medidores, perfiles de listones y colores. también puede elegir entre lanzamientos con demora de tiempo a prueba de fallas, detectores de humo y sistemas de advertencia audible y visual.            
            ',
            'category_id' => 17,
        ]);


        DB::table('articles')->insert([
            'name' => 'cortinas anti-huracan hiresa',
            'slug' => 'cortinas-anti-huracan-hiresa',
            'description' => 'cortinas fabricadas en méxico, han sido construidas para defender la integridad de un inmueble de grandes vientos como: nortes y huracanes. proveyendo de una constitución rígida estas cortinas han demostrado ser superior en todos sus aspectos, desde diseño teniendo dos refuerzos de interiores, hasta su sistema de fijación a base de tornillos de tungsteno, convirtiéndola así en la mejor solución no sólo para la industria y los comercios, sino para los hogares donde requieren de una protección mayor contra las fuerzas de la naturaleza y todo lo que pueda traer en su interior los vientos.
            debido a su construcción en aluminio extruido son capaces de resistir a la intemperie y a zonas donde la salinidad sea un problema, para aguantar igualmente hasta 250 km/hr
            pudiendo así cubrir distintas aperturas de hasta 35 metros cuadrados a poder colocarse de diferentes formas dentro de un vano.
            gracias a su accionamiento automático demuestran ser prácticas y sencillas de usar, reduciendo así el esfuerzo al momento de usarlas.
            una característica más es su diseño para permitir la filtración de sol  para proveer de iluminación cuando se requiera, así de sombre cuando este mismo se pida.
            ',
            'category_id' => 17,
        ]);

        
        //control de acceso

        DB::table('articles')->insert([
            'name' => 'express gate',
            'slug' => 'express_gate',
            'description' => 'El control de acceso express gate de manusa está compuestos por un elegante mueble que sirve de soporte a los paneles de vidrio deslizantes, las fotocélulas de seguridad, los lectores de control de acceso y el sistema exclusivo de Manusa para la apertura de paneles con total seguridad.
            Son sistemas que nos permiten supervisar el acceso de personas a edificios de oficinas, instalaciones deportivas, zonas de ocio, etc, con capacidad de adaptarse a sistemas de seguridad o controles de acceso existenes, permitiéndole integrarse en diferentes proyectos arquitectónicos.',
            'category_id' => 18,
        ]);

        DB::table('articles')->insert([
            'name' => 'slim gate',
            'slug' => 'slim-gate',
            'description' => 'Los Slim Gate son la última novedad en sistemas de control de acceso donde la seguridad, el alto nivel de confort para el usuario y el diseño más exigente son esenciales, de la mano de paneles de accionamiento batientes.
            Son sistemas que nos permiten supervisar el acceso de personas a edificios de oficinas, instalaciones deportivas, zonas de ocio, etc, con capacidad de adaptarse a sistemas de seguridad o controles de acceso existenes, permitiéndole integrarse en diferentes proyectos arquitectónicos.
            Teniendo la capacidad de que puedan integrarle sistemas de reconocimiento facial, así como tarjetas RFID, huellas dactilares.',
            'category_id' => 18,
        ]);

        DB::table('articles')->insert([
            'name' => 'pasillos antirretorno torán',
            'slug' => 'pasillos-antirretorno-toran',
            'description' => 'El pasillo antirretorno Toran es un pasillo para control de acceso que ha sido especialmente concebido para satisfacer las necesidades de seguridad de aeropuertos, terminales marítimas o ferroviarias e infraestructuras de transporte público en general.
            Este sistema tiene como función controlar el flujo de personas una vez llegado a una terminal, preveniendo que estos puedan regresar a áreas, dando así un flujo de gente mejor dentro de áreas.
            Su sistema de puertas permite una interacción sueva y práctica por su movimiento oscilante, con la capacidad de detectar si el peatón se mueve para adelante o para atrás',
            'category_id' => 18,
        ]);

        DB::table('articles')->insert([
            'name' => 'swing gate',
            'slug' => 'swing-gate',
            'description' => 'Combinables con otros dispositivos como torniquetes y pasillos para proveer a la instalación de un acceso adaptado a necesidades especiales.
            Son sistemas que nos permiten supervisar el acceso de personas a edificios de oficinas, instalaciones deportivas, zonas de ocio, etc, con capacidad de adaptarse a sistemas de seguridad o controles de acceso existenes, permitiéndole integrarse en diferentes proyectos arquitectónicos.
            Teniendo la capacidad de que puedan integrarle sistemas de reconocimiento facial, así como tarjetas RFID, huellas dactilares.',
            'category_id' => 18,
        ]);

        //Puertas de impacto

        DB::table('articles')->insert([
            'name' => 'LWP6',
            'slug' => 'LWP6',
            'description' => 'Puertas impactables dobles en aluminio diseñadas para aplicaciones ligeras y económicas, generalmente usadas en: panaderías, restaurantes, comedores y su flujo no sea tan alto. De la mano de un acabado anodizado transparente volviéndola atractiva a la vista y de fácil limpieza de la mano de su sistema Easy Swing convirtiéndola en la puerta de impacto más ligera del mercado por más de 30 años.',
            'category_id' => 19,
        ]);


        DB::table('articles')->insert([
            'name' => 'HCP-10',
            'slug' => 'HCP-10',
            'description' => 'Puertas impactables diseñadas para apliaciones como: Autoservicios, Centros Comerciales, Industria ligera, donde requieran de un tráfico medio de personal, con los que su placa de pateo evitará el golpe con la hoja. Los paneles están texturizados en ambos lados de la mano de su sistema Easy Swing conviertiéndola en la puerta de impacto más ligera del mercado por más de 30 años, con juntas perimetrales para aplicaciones en frío. Con opción a elegir en varios colores.',
            'category_id' => 19,
        ]);

        DB::table('articles')->insert([
            'name' => 'FX-9000',
            'slug' => 'FX-9000',
            'description' => 'Puertas impactables diseñadas para apliaciones como: Autoservicios, Centros Comerciales, Industria pesada, donde requieran de un tráfico alto, adaptándose así a diferentes medidas. Los paneles cuentan con refuerzos internos los cuales aseguran su alto rendimiento y resistencia a golpes en ambos lados de la mano de su sistema V-CAM la cual permite que tenga un funcionamiento suave',
            'category_id' => 19,
        ]);

        
        DB::table('articles')->insert([
            'name' => 'LWP3',
            'slug' => 'LWP3',
            'description' => 'Puertas impactables sencillas en aluminio diseñadas para aplicaciones ligeras y económicas, generalmente usadas en: panaderías, restaurantes, comedores y su flujo no sea tan alto. De la mano de un acabado anodizado transparente volviéndola atractiva a la vista y de fácil limpieza de la mano de su sistema Easy Swing convirtiéndola en la puerta de impacto más ligera del mercado por más de 30 años.',
            'category_id' => 19,
        ]);

        DB::table('articles')->insert([
            'name' => 'HCG-10',
            'slug' => 'HCG-10',
            'description' => 'Puertas impactables diseñadas para apliaciones como: Autoservicios, Centros C
            omerciales, Industria ligera, donde requieran de un tráfico medio de la mano de pallets, con los que su bumper evitará el golpe con la hoja. Los paneles están texturizados en ambos lados de la mano de su sistema Easy Swing conviertiéndola en la puerta de impacto más ligera del mercado por más de 30 años, con juntas perimetrales para aplicaciones en frío. Con opción a elegir en varios colores',
            'category_id' => 19,
        ]);
       
    }
}
