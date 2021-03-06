PGDMP                         w           ptaw-2019-gr1    9.6.13    11.3 z    	           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                       false            	           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                       false            	           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                       false            	           1262    84253    ptaw-2019-gr1    DATABASE     �   CREATE DATABASE "ptaw-2019-gr1" WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'en_GB.UTF-8' LC_CTYPE = 'en_GB.UTF-8';
    DROP DATABASE "ptaw-2019-gr1";
             ptaw-2019-gr1    false            	           0    0    DATABASE "ptaw-2019-gr1"    ACL     B   REVOKE CONNECT,TEMPORARY ON DATABASE "ptaw-2019-gr1" FROM PUBLIC;
                  ptaw-2019-gr1    false    2319            �            1259    92977    administradores    TABLE     �  CREATE TABLE public.administradores (
    id integer NOT NULL,
    email character varying NOT NULL,
    password character varying NOT NULL,
    nome character varying NOT NULL,
    contacto integer NOT NULL,
    morada character varying NOT NULL,
    cod_postal integer NOT NULL,
    nif integer NOT NULL,
    trabalhador_empresa_mae boolean NOT NULL,
    id_empresa_cliente integer,
    is_active boolean DEFAULT true NOT NULL
);
 #   DROP TABLE public.administradores;
       public         ptaw-2019-gr1    false            �            1259    92975    administradores_id_seq    SEQUENCE        CREATE SEQUENCE public.administradores_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.administradores_id_seq;
       public       ptaw-2019-gr1    false    186            	           0    0    administradores_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.administradores_id_seq OWNED BY public.administradores.id;
            public       ptaw-2019-gr1    false    185            �            1259    92989    botijas    TABLE     *  CREATE TABLE public.botijas (
    id integer NOT NULL,
    marca character varying NOT NULL,
    tipo integer NOT NULL,
    tamanho integer NOT NULL,
    preco real NOT NULL,
    id_empresa_produtora integer NOT NULL,
    id_maquina integer NOT NULL,
    is_active boolean DEFAULT true NOT NULL
);
    DROP TABLE public.botijas;
       public         ptaw-2019-gr1    false            �            1259    92987    botijas_id_seq    SEQUENCE     w   CREATE SEQUENCE public.botijas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.botijas_id_seq;
       public       ptaw-2019-gr1    false    188            	           0    0    botijas_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.botijas_id_seq OWNED BY public.botijas.id;
            public       ptaw-2019-gr1    false    187            �            1259    93001    clientes    TABLE     8  CREATE TABLE public.clientes (
    id integer NOT NULL,
    nome character varying NOT NULL,
    email character varying NOT NULL,
    contacto integer NOT NULL,
    nif integer NOT NULL,
    cod_postal integer NOT NULL,
    morada_sede character varying NOT NULL,
    is_active boolean DEFAULT true NOT NULL
);
    DROP TABLE public.clientes;
       public         ptaw-2019-gr1    false            �            1259    92999    clientes_id_seq    SEQUENCE     x   CREATE SEQUENCE public.clientes_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.clientes_id_seq;
       public       ptaw-2019-gr1    false    190            	           0    0    clientes_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.clientes_id_seq OWNED BY public.clientes.id;
            public       ptaw-2019-gr1    false    189            �            1259    93011 	   distritos    TABLE     h   CREATE TABLE public.distritos (
    cod_postal integer NOT NULL,
    nome character varying NOT NULL
);
    DROP TABLE public.distritos;
       public         ptaw-2019-gr1    false            �            1259    93021    estados_maquinas    TABLE     g   CREATE TABLE public.estados_maquinas (
    id integer NOT NULL,
    nome character varying NOT NULL
);
 $   DROP TABLE public.estados_maquinas;
       public         ptaw-2019-gr1    false            �            1259    93019    estados_maquinas_id_seq    SEQUENCE     �   CREATE SEQUENCE public.estados_maquinas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.estados_maquinas_id_seq;
       public       ptaw-2019-gr1    false    193            	           0    0    estados_maquinas_id_seq    SEQUENCE OWNED BY     S   ALTER SEQUENCE public.estados_maquinas_id_seq OWNED BY public.estados_maquinas.id;
            public       ptaw-2019-gr1    false    192            �            1259    93032    estados_pedidos    TABLE     f   CREATE TABLE public.estados_pedidos (
    id integer NOT NULL,
    nome character varying NOT NULL
);
 #   DROP TABLE public.estados_pedidos;
       public         ptaw-2019-gr1    false            �            1259    93030    estados_pedidos_id_seq    SEQUENCE        CREATE SEQUENCE public.estados_pedidos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.estados_pedidos_id_seq;
       public       ptaw-2019-gr1    false    195            	           0    0    estados_pedidos_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.estados_pedidos_id_seq OWNED BY public.estados_pedidos.id;
            public       ptaw-2019-gr1    false    194            �            1259    93043    logestadomaquinas    TABLE     3  CREATE TABLE public.logestadomaquinas (
    id integer NOT NULL,
    id_maquina integer NOT NULL,
    data_inicio timestamp without time zone DEFAULT (('now'::text)::timestamp(0) with time zone)::timestamp without time zone NOT NULL,
    data_fim timestamp without time zone,
    estado integer NOT NULL
);
 %   DROP TABLE public.logestadomaquinas;
       public         ptaw-2019-gr1    false            �            1259    93041    logestadomaquinas_id_seq    SEQUENCE     �   CREATE SEQUENCE public.logestadomaquinas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.logestadomaquinas_id_seq;
       public       ptaw-2019-gr1    false    197            	           0    0    logestadomaquinas_id_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.logestadomaquinas_id_seq OWNED BY public.logestadomaquinas.id;
            public       ptaw-2019-gr1    false    196            �            1259    93052    maquinas    TABLE     a  CREATE TABLE public.maquinas (
    id integer NOT NULL,
    estado integer NOT NULL,
    localizacao character varying NOT NULL,
    cod_postal integer NOT NULL,
    latitude real NOT NULL,
    longitude real NOT NULL,
    taxa_reabastecimento integer DEFAULT 0 NOT NULL,
    id_empresa_atribuida integer,
    is_active boolean DEFAULT true NOT NULL
);
    DROP TABLE public.maquinas;
       public         ptaw-2019-gr1    false            �            1259    93050    maquinas_id_seq    SEQUENCE     x   CREATE SEQUENCE public.maquinas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.maquinas_id_seq;
       public       ptaw-2019-gr1    false    199            	           0    0    maquinas_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.maquinas_id_seq OWNED BY public.maquinas.id;
            public       ptaw-2019-gr1    false    198            �            1259    93065 	   mensagens    TABLE     B  CREATE TABLE public.mensagens (
    id integer NOT NULL,
    data timestamp without time zone DEFAULT (('now'::text)::timestamp(0) with time zone)::timestamp without time zone NOT NULL,
    lida boolean NOT NULL,
    corpo_mensagem text NOT NULL,
    id_remetente integer NOT NULL,
    id_pedido_apoio integer NOT NULL
);
    DROP TABLE public.mensagens;
       public         ptaw-2019-gr1    false            �            1259    93063    mensagens_id_seq    SEQUENCE     y   CREATE SEQUENCE public.mensagens_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.mensagens_id_seq;
       public       ptaw-2019-gr1    false    201            	           0    0    mensagens_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.mensagens_id_seq OWNED BY public.mensagens.id;
            public       ptaw-2019-gr1    false    200            �            1259    93077    pedidosdeapoio    TABLE     �  CREATE TABLE public.pedidosdeapoio (
    id integer NOT NULL,
    estado integer NOT NULL,
    tipo integer NOT NULL,
    data_envio timestamp without time zone DEFAULT (('now'::text)::timestamp(0) with time zone)::timestamp without time zone NOT NULL,
    data_resolucao timestamp without time zone,
    id_queixoso integer NOT NULL,
    qualidade_apoio integer,
    tempo_resolucao integer,
    comentario_satisfacao character varying,
    assunto character varying NOT NULL
);
 "   DROP TABLE public.pedidosdeapoio;
       public         ptaw-2019-gr1    false            �            1259    93075    pedidosdeapoio_id_seq    SEQUENCE     ~   CREATE SEQUENCE public.pedidosdeapoio_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.pedidosdeapoio_id_seq;
       public       ptaw-2019-gr1    false    203            	           0    0    pedidosdeapoio_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.pedidosdeapoio_id_seq OWNED BY public.pedidosdeapoio.id;
            public       ptaw-2019-gr1    false    202            �            1259    93089    tamanhos    TABLE     _   CREATE TABLE public.tamanhos (
    id integer NOT NULL,
    nome character varying NOT NULL
);
    DROP TABLE public.tamanhos;
       public         ptaw-2019-gr1    false            �            1259    93087    tamanhos_id_seq    SEQUENCE     x   CREATE SEQUENCE public.tamanhos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.tamanhos_id_seq;
       public       ptaw-2019-gr1    false    205            	           0    0    tamanhos_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.tamanhos_id_seq OWNED BY public.tamanhos.id;
            public       ptaw-2019-gr1    false    204            �            1259    93100    tipos_botijas    TABLE     d   CREATE TABLE public.tipos_botijas (
    id integer NOT NULL,
    nome character varying NOT NULL
);
 !   DROP TABLE public.tipos_botijas;
       public         ptaw-2019-gr1    false            �            1259    93098    tipos_botijas_id_seq    SEQUENCE     }   CREATE SEQUENCE public.tipos_botijas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.tipos_botijas_id_seq;
       public       ptaw-2019-gr1    false    207            	           0    0    tipos_botijas_id_seq    SEQUENCE OWNED BY     M   ALTER SEQUENCE public.tipos_botijas_id_seq OWNED BY public.tipos_botijas.id;
            public       ptaw-2019-gr1    false    206            �            1259    93111    tipos_pedidos    TABLE     d   CREATE TABLE public.tipos_pedidos (
    id integer NOT NULL,
    nome character varying NOT NULL
);
 !   DROP TABLE public.tipos_pedidos;
       public         ptaw-2019-gr1    false            �            1259    93109    tipos_pedidos_id_seq    SEQUENCE     }   CREATE SEQUENCE public.tipos_pedidos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.tipos_pedidos_id_seq;
       public       ptaw-2019-gr1    false    209            	           0    0    tipos_pedidos_id_seq    SEQUENCE OWNED BY     M   ALTER SEQUENCE public.tipos_pedidos_id_seq OWNED BY public.tipos_pedidos.id;
            public       ptaw-2019-gr1    false    208            �            1259    93122    vendas    TABLE     �   CREATE TABLE public.vendas (
    id integer NOT NULL,
    data timestamp without time zone DEFAULT (('now'::text)::timestamp(0) with time zone)::timestamp without time zone NOT NULL,
    id_maquina integer NOT NULL
);
    DROP TABLE public.vendas;
       public         ptaw-2019-gr1    false            �            1259    93129    vendas_botijas    TABLE     f   CREATE TABLE public.vendas_botijas (
    id_venda integer NOT NULL,
    id_botija integer NOT NULL
);
 "   DROP TABLE public.vendas_botijas;
       public         ptaw-2019-gr1    false            �            1259    93120    vendas_id_seq    SEQUENCE     v   CREATE SEQUENCE public.vendas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.vendas_id_seq;
       public       ptaw-2019-gr1    false    211            	           0    0    vendas_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.vendas_id_seq OWNED BY public.vendas.id;
            public       ptaw-2019-gr1    false    210            1           2604    92980    administradores id    DEFAULT     x   ALTER TABLE ONLY public.administradores ALTER COLUMN id SET DEFAULT nextval('public.administradores_id_seq'::regclass);
 A   ALTER TABLE public.administradores ALTER COLUMN id DROP DEFAULT;
       public       ptaw-2019-gr1    false    186    185    186            3           2604    92992 
   botijas id    DEFAULT     h   ALTER TABLE ONLY public.botijas ALTER COLUMN id SET DEFAULT nextval('public.botijas_id_seq'::regclass);
 9   ALTER TABLE public.botijas ALTER COLUMN id DROP DEFAULT;
       public       ptaw-2019-gr1    false    187    188    188            5           2604    93004    clientes id    DEFAULT     j   ALTER TABLE ONLY public.clientes ALTER COLUMN id SET DEFAULT nextval('public.clientes_id_seq'::regclass);
 :   ALTER TABLE public.clientes ALTER COLUMN id DROP DEFAULT;
       public       ptaw-2019-gr1    false    190    189    190            7           2604    93024    estados_maquinas id    DEFAULT     z   ALTER TABLE ONLY public.estados_maquinas ALTER COLUMN id SET DEFAULT nextval('public.estados_maquinas_id_seq'::regclass);
 B   ALTER TABLE public.estados_maquinas ALTER COLUMN id DROP DEFAULT;
       public       ptaw-2019-gr1    false    193    192    193            8           2604    93035    estados_pedidos id    DEFAULT     x   ALTER TABLE ONLY public.estados_pedidos ALTER COLUMN id SET DEFAULT nextval('public.estados_pedidos_id_seq'::regclass);
 A   ALTER TABLE public.estados_pedidos ALTER COLUMN id DROP DEFAULT;
       public       ptaw-2019-gr1    false    195    194    195            9           2604    93046    logestadomaquinas id    DEFAULT     |   ALTER TABLE ONLY public.logestadomaquinas ALTER COLUMN id SET DEFAULT nextval('public.logestadomaquinas_id_seq'::regclass);
 C   ALTER TABLE public.logestadomaquinas ALTER COLUMN id DROP DEFAULT;
       public       ptaw-2019-gr1    false    197    196    197            ;           2604    93055    maquinas id    DEFAULT     j   ALTER TABLE ONLY public.maquinas ALTER COLUMN id SET DEFAULT nextval('public.maquinas_id_seq'::regclass);
 :   ALTER TABLE public.maquinas ALTER COLUMN id DROP DEFAULT;
       public       ptaw-2019-gr1    false    198    199    199            >           2604    93068    mensagens id    DEFAULT     l   ALTER TABLE ONLY public.mensagens ALTER COLUMN id SET DEFAULT nextval('public.mensagens_id_seq'::regclass);
 ;   ALTER TABLE public.mensagens ALTER COLUMN id DROP DEFAULT;
       public       ptaw-2019-gr1    false    201    200    201            @           2604    93080    pedidosdeapoio id    DEFAULT     v   ALTER TABLE ONLY public.pedidosdeapoio ALTER COLUMN id SET DEFAULT nextval('public.pedidosdeapoio_id_seq'::regclass);
 @   ALTER TABLE public.pedidosdeapoio ALTER COLUMN id DROP DEFAULT;
       public       ptaw-2019-gr1    false    202    203    203            B           2604    93092    tamanhos id    DEFAULT     j   ALTER TABLE ONLY public.tamanhos ALTER COLUMN id SET DEFAULT nextval('public.tamanhos_id_seq'::regclass);
 :   ALTER TABLE public.tamanhos ALTER COLUMN id DROP DEFAULT;
       public       ptaw-2019-gr1    false    205    204    205            C           2604    93103    tipos_botijas id    DEFAULT     t   ALTER TABLE ONLY public.tipos_botijas ALTER COLUMN id SET DEFAULT nextval('public.tipos_botijas_id_seq'::regclass);
 ?   ALTER TABLE public.tipos_botijas ALTER COLUMN id DROP DEFAULT;
       public       ptaw-2019-gr1    false    206    207    207            D           2604    93114    tipos_pedidos id    DEFAULT     t   ALTER TABLE ONLY public.tipos_pedidos ALTER COLUMN id SET DEFAULT nextval('public.tipos_pedidos_id_seq'::regclass);
 ?   ALTER TABLE public.tipos_pedidos ALTER COLUMN id DROP DEFAULT;
       public       ptaw-2019-gr1    false    209    208    209            E           2604    93125 	   vendas id    DEFAULT     f   ALTER TABLE ONLY public.vendas ALTER COLUMN id SET DEFAULT nextval('public.vendas_id_seq'::regclass);
 8   ALTER TABLE public.vendas ALTER COLUMN id DROP DEFAULT;
       public       ptaw-2019-gr1    false    211    210    211            �          0    92977    administradores 
   TABLE DATA               �   COPY public.administradores (id, email, password, nome, contacto, morada, cod_postal, nif, trabalhador_empresa_mae, id_empresa_cliente, is_active) FROM stdin;
    public       ptaw-2019-gr1    false    186   .�       �          0    92989    botijas 
   TABLE DATA               o   COPY public.botijas (id, marca, tipo, tamanho, preco, id_empresa_produtora, id_maquina, is_active) FROM stdin;
    public       ptaw-2019-gr1    false    188   ��       �          0    93001    clientes 
   TABLE DATA               f   COPY public.clientes (id, nome, email, contacto, nif, cod_postal, morada_sede, is_active) FROM stdin;
    public       ptaw-2019-gr1    false    190   
�       �          0    93011 	   distritos 
   TABLE DATA               5   COPY public.distritos (cod_postal, nome) FROM stdin;
    public       ptaw-2019-gr1    false    191   D�       �          0    93021    estados_maquinas 
   TABLE DATA               4   COPY public.estados_maquinas (id, nome) FROM stdin;
    public       ptaw-2019-gr1    false    193    �       �          0    93032    estados_pedidos 
   TABLE DATA               3   COPY public.estados_pedidos (id, nome) FROM stdin;
    public       ptaw-2019-gr1    false    195   F�       �          0    93043    logestadomaquinas 
   TABLE DATA               Z   COPY public.logestadomaquinas (id, id_maquina, data_inicio, data_fim, estado) FROM stdin;
    public       ptaw-2019-gr1    false    197   ��       �          0    93052    maquinas 
   TABLE DATA               �   COPY public.maquinas (id, estado, localizacao, cod_postal, latitude, longitude, taxa_reabastecimento, id_empresa_atribuida, is_active) FROM stdin;
    public       ptaw-2019-gr1    false    199   ��       �          0    93065 	   mensagens 
   TABLE DATA               b   COPY public.mensagens (id, data, lida, corpo_mensagem, id_remetente, id_pedido_apoio) FROM stdin;
    public       ptaw-2019-gr1    false    201   "�        	          0    93077    pedidosdeapoio 
   TABLE DATA               �   COPY public.pedidosdeapoio (id, estado, tipo, data_envio, data_resolucao, id_queixoso, qualidade_apoio, tempo_resolucao, comentario_satisfacao, assunto) FROM stdin;
    public       ptaw-2019-gr1    false    203   q�       	          0    93089    tamanhos 
   TABLE DATA               ,   COPY public.tamanhos (id, nome) FROM stdin;
    public       ptaw-2019-gr1    false    205   W�       	          0    93100    tipos_botijas 
   TABLE DATA               1   COPY public.tipos_botijas (id, nome) FROM stdin;
    public       ptaw-2019-gr1    false    207   ��       	          0    93111    tipos_pedidos 
   TABLE DATA               1   COPY public.tipos_pedidos (id, nome) FROM stdin;
    public       ptaw-2019-gr1    false    209   ��       	          0    93122    vendas 
   TABLE DATA               6   COPY public.vendas (id, data, id_maquina) FROM stdin;
    public       ptaw-2019-gr1    false    211   �       		          0    93129    vendas_botijas 
   TABLE DATA               =   COPY public.vendas_botijas (id_venda, id_botija) FROM stdin;
    public       ptaw-2019-gr1    false    212   $�       	           0    0    administradores_id_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.administradores_id_seq', 109, true);
            public       ptaw-2019-gr1    false    185            	           0    0    botijas_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.botijas_id_seq', 4, true);
            public       ptaw-2019-gr1    false    187             	           0    0    clientes_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.clientes_id_seq', 102, true);
            public       ptaw-2019-gr1    false    189            !	           0    0    estados_maquinas_id_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.estados_maquinas_id_seq', 3, true);
            public       ptaw-2019-gr1    false    192            "	           0    0    estados_pedidos_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.estados_pedidos_id_seq', 3, true);
            public       ptaw-2019-gr1    false    194            #	           0    0    logestadomaquinas_id_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.logestadomaquinas_id_seq', 1, false);
            public       ptaw-2019-gr1    false    196            $	           0    0    maquinas_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.maquinas_id_seq', 547, true);
            public       ptaw-2019-gr1    false    198            %	           0    0    mensagens_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.mensagens_id_seq', 472, true);
            public       ptaw-2019-gr1    false    200            &	           0    0    pedidosdeapoio_id_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.pedidosdeapoio_id_seq', 125, true);
            public       ptaw-2019-gr1    false    202            '	           0    0    tamanhos_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.tamanhos_id_seq', 2, true);
            public       ptaw-2019-gr1    false    204            (	           0    0    tipos_botijas_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.tipos_botijas_id_seq', 2, true);
            public       ptaw-2019-gr1    false    206            )	           0    0    tipos_pedidos_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.tipos_pedidos_id_seq', 5, true);
            public       ptaw-2019-gr1    false    208            *	           0    0    vendas_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.vendas_id_seq', 1, false);
            public       ptaw-2019-gr1    false    210            H           2606    92986 "   administradores administradores_pk 
   CONSTRAINT     `   ALTER TABLE ONLY public.administradores
    ADD CONSTRAINT administradores_pk PRIMARY KEY (id);
 L   ALTER TABLE ONLY public.administradores DROP CONSTRAINT administradores_pk;
       public         ptaw-2019-gr1    false    186            J           2606    92998    botijas botijas_pk 
   CONSTRAINT     P   ALTER TABLE ONLY public.botijas
    ADD CONSTRAINT botijas_pk PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.botijas DROP CONSTRAINT botijas_pk;
       public         ptaw-2019-gr1    false    188            L           2606    93010    clientes clientes_pk 
   CONSTRAINT     R   ALTER TABLE ONLY public.clientes
    ADD CONSTRAINT clientes_pk PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.clientes DROP CONSTRAINT clientes_pk;
       public         ptaw-2019-gr1    false    190            N           2606    93018    distritos distritos_pk 
   CONSTRAINT     \   ALTER TABLE ONLY public.distritos
    ADD CONSTRAINT distritos_pk PRIMARY KEY (cod_postal);
 @   ALTER TABLE ONLY public.distritos DROP CONSTRAINT distritos_pk;
       public         ptaw-2019-gr1    false    191            P           2606    93029 $   estados_maquinas estados_maquinas_pk 
   CONSTRAINT     b   ALTER TABLE ONLY public.estados_maquinas
    ADD CONSTRAINT estados_maquinas_pk PRIMARY KEY (id);
 N   ALTER TABLE ONLY public.estados_maquinas DROP CONSTRAINT estados_maquinas_pk;
       public         ptaw-2019-gr1    false    193            R           2606    93040 "   estados_pedidos estados_pedidos_pk 
   CONSTRAINT     `   ALTER TABLE ONLY public.estados_pedidos
    ADD CONSTRAINT estados_pedidos_pk PRIMARY KEY (id);
 L   ALTER TABLE ONLY public.estados_pedidos DROP CONSTRAINT estados_pedidos_pk;
       public         ptaw-2019-gr1    false    195            T           2606    93049 &   logestadomaquinas logestadomaquinas_pk 
   CONSTRAINT     d   ALTER TABLE ONLY public.logestadomaquinas
    ADD CONSTRAINT logestadomaquinas_pk PRIMARY KEY (id);
 P   ALTER TABLE ONLY public.logestadomaquinas DROP CONSTRAINT logestadomaquinas_pk;
       public         ptaw-2019-gr1    false    197            V           2606    93062    maquinas maquinas_pk 
   CONSTRAINT     R   ALTER TABLE ONLY public.maquinas
    ADD CONSTRAINT maquinas_pk PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.maquinas DROP CONSTRAINT maquinas_pk;
       public         ptaw-2019-gr1    false    199            X           2606    93074    mensagens mensagens_pk 
   CONSTRAINT     T   ALTER TABLE ONLY public.mensagens
    ADD CONSTRAINT mensagens_pk PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.mensagens DROP CONSTRAINT mensagens_pk;
       public         ptaw-2019-gr1    false    201            Z           2606    93086     pedidosdeapoio pedidosdeapoio_pk 
   CONSTRAINT     ^   ALTER TABLE ONLY public.pedidosdeapoio
    ADD CONSTRAINT pedidosdeapoio_pk PRIMARY KEY (id);
 J   ALTER TABLE ONLY public.pedidosdeapoio DROP CONSTRAINT pedidosdeapoio_pk;
       public         ptaw-2019-gr1    false    203            \           2606    93097    tamanhos tamanhos_pk 
   CONSTRAINT     R   ALTER TABLE ONLY public.tamanhos
    ADD CONSTRAINT tamanhos_pk PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.tamanhos DROP CONSTRAINT tamanhos_pk;
       public         ptaw-2019-gr1    false    205            `           2606    93119    tipos_pedidos tipos_pedidos_pk 
   CONSTRAINT     \   ALTER TABLE ONLY public.tipos_pedidos
    ADD CONSTRAINT tipos_pedidos_pk PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.tipos_pedidos DROP CONSTRAINT tipos_pedidos_pk;
       public         ptaw-2019-gr1    false    209            ^           2606    93108    tipos_botijas tipos_pk 
   CONSTRAINT     T   ALTER TABLE ONLY public.tipos_botijas
    ADD CONSTRAINT tipos_pk PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.tipos_botijas DROP CONSTRAINT tipos_pk;
       public         ptaw-2019-gr1    false    207            d           2606    93133     vendas_botijas vendas_botijas_pk 
   CONSTRAINT     o   ALTER TABLE ONLY public.vendas_botijas
    ADD CONSTRAINT vendas_botijas_pk PRIMARY KEY (id_venda, id_botija);
 J   ALTER TABLE ONLY public.vendas_botijas DROP CONSTRAINT vendas_botijas_pk;
       public         ptaw-2019-gr1    false    212    212            b           2606    93128    vendas vendas_pk 
   CONSTRAINT     N   ALTER TABLE ONLY public.vendas
    ADD CONSTRAINT vendas_pk PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.vendas DROP CONSTRAINT vendas_pk;
       public         ptaw-2019-gr1    false    211            g           2606    93134    botijas botijas_clientes    FK CONSTRAINT     �   ALTER TABLE ONLY public.botijas
    ADD CONSTRAINT botijas_clientes FOREIGN KEY (id_empresa_produtora) REFERENCES public.clientes(id);
 B   ALTER TABLE ONLY public.botijas DROP CONSTRAINT botijas_clientes;
       public       ptaw-2019-gr1    false    190    2124    188            h           2606    93139    botijas botijas_tamanhos    FK CONSTRAINT     z   ALTER TABLE ONLY public.botijas
    ADD CONSTRAINT botijas_tamanhos FOREIGN KEY (tamanho) REFERENCES public.tamanhos(id);
 B   ALTER TABLE ONLY public.botijas DROP CONSTRAINT botijas_tamanhos;
       public       ptaw-2019-gr1    false    205    188    2140            i           2606    93144    botijas botijas_tipos    FK CONSTRAINT     y   ALTER TABLE ONLY public.botijas
    ADD CONSTRAINT botijas_tipos FOREIGN KEY (tipo) REFERENCES public.tipos_botijas(id);
 ?   ALTER TABLE ONLY public.botijas DROP CONSTRAINT botijas_tipos;
       public       ptaw-2019-gr1    false    207    188    2142            e           2606    93149 (   administradores clientes_administradores    FK CONSTRAINT     �   ALTER TABLE ONLY public.administradores
    ADD CONSTRAINT clientes_administradores FOREIGN KEY (id_empresa_cliente) REFERENCES public.clientes(id);
 R   ALTER TABLE ONLY public.administradores DROP CONSTRAINT clientes_administradores;
       public       ptaw-2019-gr1    false    2124    190    186            k           2606    93154    clientes clientes_distritos    FK CONSTRAINT     �   ALTER TABLE ONLY public.clientes
    ADD CONSTRAINT clientes_distritos FOREIGN KEY (cod_postal) REFERENCES public.distritos(cod_postal);
 E   ALTER TABLE ONLY public.clientes DROP CONSTRAINT clientes_distritos;
       public       ptaw-2019-gr1    false    191    2126    190            n           2606    93159    maquinas clientes_maquinas    FK CONSTRAINT     �   ALTER TABLE ONLY public.maquinas
    ADD CONSTRAINT clientes_maquinas FOREIGN KEY (id_empresa_atribuida) REFERENCES public.clientes(id);
 D   ALTER TABLE ONLY public.maquinas DROP CONSTRAINT clientes_maquinas;
       public       ptaw-2019-gr1    false    2124    190    199            f           2606    93164 )   administradores distritos_administradores    FK CONSTRAINT     �   ALTER TABLE ONLY public.administradores
    ADD CONSTRAINT distritos_administradores FOREIGN KEY (cod_postal) REFERENCES public.distritos(cod_postal);
 S   ALTER TABLE ONLY public.administradores DROP CONSTRAINT distritos_administradores;
       public       ptaw-2019-gr1    false    186    191    2126            l           2606    93169 +   logestadomaquinas logestadomaquinas_estados    FK CONSTRAINT     �   ALTER TABLE ONLY public.logestadomaquinas
    ADD CONSTRAINT logestadomaquinas_estados FOREIGN KEY (estado) REFERENCES public.estados_maquinas(id);
 U   ALTER TABLE ONLY public.logestadomaquinas DROP CONSTRAINT logestadomaquinas_estados;
       public       ptaw-2019-gr1    false    2128    197    193            j           2606    93174    botijas maquinas_botijas    FK CONSTRAINT     }   ALTER TABLE ONLY public.botijas
    ADD CONSTRAINT maquinas_botijas FOREIGN KEY (id_maquina) REFERENCES public.maquinas(id);
 B   ALTER TABLE ONLY public.botijas DROP CONSTRAINT maquinas_botijas;
       public       ptaw-2019-gr1    false    199    188    2134            o           2606    93179    maquinas maquinas_distritos    FK CONSTRAINT     �   ALTER TABLE ONLY public.maquinas
    ADD CONSTRAINT maquinas_distritos FOREIGN KEY (cod_postal) REFERENCES public.distritos(cod_postal);
 E   ALTER TABLE ONLY public.maquinas DROP CONSTRAINT maquinas_distritos;
       public       ptaw-2019-gr1    false    199    2126    191            p           2606    93184    maquinas maquinas_estados    FK CONSTRAINT     �   ALTER TABLE ONLY public.maquinas
    ADD CONSTRAINT maquinas_estados FOREIGN KEY (estado) REFERENCES public.estados_maquinas(id);
 C   ALTER TABLE ONLY public.maquinas DROP CONSTRAINT maquinas_estados;
       public       ptaw-2019-gr1    false    199    2128    193            m           2606    93189 ,   logestadomaquinas maquinas_logestadomaquinas    FK CONSTRAINT     �   ALTER TABLE ONLY public.logestadomaquinas
    ADD CONSTRAINT maquinas_logestadomaquinas FOREIGN KEY (id_maquina) REFERENCES public.maquinas(id);
 V   ALTER TABLE ONLY public.logestadomaquinas DROP CONSTRAINT maquinas_logestadomaquinas;
       public       ptaw-2019-gr1    false    197    2134    199            q           2606    93194 #   mensagens mensagens_administradores    FK CONSTRAINT     �   ALTER TABLE ONLY public.mensagens
    ADD CONSTRAINT mensagens_administradores FOREIGN KEY (id_remetente) REFERENCES public.administradores(id);
 M   ALTER TABLE ONLY public.mensagens DROP CONSTRAINT mensagens_administradores;
       public       ptaw-2019-gr1    false    186    2120    201            r           2606    93199 !   mensagens mensagens_pedidodeapoio    FK CONSTRAINT     �   ALTER TABLE ONLY public.mensagens
    ADD CONSTRAINT mensagens_pedidodeapoio FOREIGN KEY (id_pedido_apoio) REFERENCES public.pedidosdeapoio(id);
 K   ALTER TABLE ONLY public.mensagens DROP CONSTRAINT mensagens_pedidodeapoio;
       public       ptaw-2019-gr1    false    203    2138    201            s           2606    93204 &   pedidosdeapoio pedidosdeapoio_clientes    FK CONSTRAINT     �   ALTER TABLE ONLY public.pedidosdeapoio
    ADD CONSTRAINT pedidosdeapoio_clientes FOREIGN KEY (id_queixoso) REFERENCES public.clientes(id);
 P   ALTER TABLE ONLY public.pedidosdeapoio DROP CONSTRAINT pedidosdeapoio_clientes;
       public       ptaw-2019-gr1    false    190    203    2124            t           2606    93209 -   pedidosdeapoio pedidosdeapoio_estados_pedidos    FK CONSTRAINT     �   ALTER TABLE ONLY public.pedidosdeapoio
    ADD CONSTRAINT pedidosdeapoio_estados_pedidos FOREIGN KEY (estado) REFERENCES public.estados_pedidos(id);
 W   ALTER TABLE ONLY public.pedidosdeapoio DROP CONSTRAINT pedidosdeapoio_estados_pedidos;
       public       ptaw-2019-gr1    false    203    2130    195            u           2606    93214 +   pedidosdeapoio pedidosdeapoio_tipos_pedidos    FK CONSTRAINT     �   ALTER TABLE ONLY public.pedidosdeapoio
    ADD CONSTRAINT pedidosdeapoio_tipos_pedidos FOREIGN KEY (tipo) REFERENCES public.tipos_pedidos(id);
 U   ALTER TABLE ONLY public.pedidosdeapoio DROP CONSTRAINT pedidosdeapoio_tipos_pedidos;
       public       ptaw-2019-gr1    false    209    203    2144            w           2606    93219 %   vendas_botijas vendas_botijas_botijas    FK CONSTRAINT     �   ALTER TABLE ONLY public.vendas_botijas
    ADD CONSTRAINT vendas_botijas_botijas FOREIGN KEY (id_botija) REFERENCES public.botijas(id);
 O   ALTER TABLE ONLY public.vendas_botijas DROP CONSTRAINT vendas_botijas_botijas;
       public       ptaw-2019-gr1    false    2122    188    212            x           2606    93224 $   vendas_botijas vendas_botijas_vendas    FK CONSTRAINT     �   ALTER TABLE ONLY public.vendas_botijas
    ADD CONSTRAINT vendas_botijas_vendas FOREIGN KEY (id_venda) REFERENCES public.vendas(id);
 N   ALTER TABLE ONLY public.vendas_botijas DROP CONSTRAINT vendas_botijas_vendas;
       public       ptaw-2019-gr1    false    2146    212    211            v           2606    93229    vendas vendas_maquinas    FK CONSTRAINT     {   ALTER TABLE ONLY public.vendas
    ADD CONSTRAINT vendas_maquinas FOREIGN KEY (id_maquina) REFERENCES public.maquinas(id);
 @   ALTER TABLE ONLY public.vendas DROP CONSTRAINT vendas_maquinas;
       public       ptaw-2019-gr1    false    2134    211    199            �      x��Zɒ�F�=��>�,"n(7���aq$k����*�$�T
������y�R}�iiF�#6��x�c���P�S���Ϻi�˻����H
�\Ud6�y+��3n3�qj�?o�,Q�ǉ��qn�7��}ѵ���vU;2Ŭ��X�,ٿ~g㫄'ߏ��f�⇳�m��ѷu��%�_�Y�v�ä�&�ڮ��*D�uf&S�tZ�D^F�=a�C6��L�����6�ߺ:�6z{�f����%3.�#�z�~��|���	�t̥�C^l_�g�q:��|���7�����K0Kb����`.����B;��V;��R]��	��*���ٵۆ�����N�-c�VX��L$��Ŋi:^-�b;�6���J_��f��e��}7�U6�W�����G�y,W��:�ћ����C7afX�*������b�����;��]������ڍ���v��/���w~y�a�P�i������6��c��DU��!�i��W_Ty�i��f���������s,K�b�(gAFo�޷ћ�z���S5hh���5l��n7�'_����<m�q�ҷ�=��q���I��rֈ��0��u�T�5���cfY�e���uw�sHҡ+��u�������llB0��t��+#-j�]�ݱ�PNc|:���m<�?�z=.�8dk�I�c2z(}_�{ڎa8��I�-p�:n���g)��/�mԯ�(����cp�N�t}����[fb�Lb:c8{%9;�ӝ��m��П����H���&��I}��9
������kVJ�4�UJ �\�?�g`��0��u�t�PO�E�aM��|� Tp����?�|���G�c��,��%"����h����=�:��>Ի�߸�:4����Y"��	�&&\��C��5(��5�[H���\�.Y���0C�񗮭+,�F�s�>�S5s0�#H����
��|��J,v�H�ǎ���cv�g�N�K�1�a+e߷a�>-��2�!Q�����S� әiP��������9�o��q*�eۈ��qAf�)$37�>[}�}���������>}�*���m���UW�G�޸����:Fb����$Y�`����ؕ-ͥ���f8��S@���Swj�C��|�����Q]�?���-4r���?qb��ϙ���2QF�tr|<A�<�C퇲�ƻ��o`���m�9SJ��qvz��ȁ��d�Zњa@��]���G����u7��Cڇ��6f�MH\������:v 1͸��߱��Ň~)����Db8E�!^�;aa��fa�:s��msxۄ�q�F�	h�JGf,�mÀz&�'*��=�0�JR�sm��6���%P`�F}�Ǉ�8pe�pZ 61�W�X��`p�N4���1�zq��6i^W�!��`:nH�0�N.��*�%���~&�ؙ�U�k#�cK J��[�����G�(�̕$��C�E��>�]t��)�J�CF
M���3PV�9�s76J���Ȑ1G+�A��RFVIH���1I0V��c@L?�b�XP�����ɟ�����$�*C �!|�V��b�*̷��4?���m�����P����P�f��GS}@�1l�r�j�΂�k���8@kM}�]�a۰�}����O��P��,�
H���3�'�w�Kp6�#�<-���k"�}�8Z�������4^�JM;kc�IjA�	W<UM�)Ʃ��#*q�6�00*c	Ǹ
�o�� �5�`M��ZA8t�Z~KX�"�Ʊk���s��m�|��!�8��ģ4��`�0���v���Q^P������3�/���)�wݾ&�I~����_�1�*#ȧ�1F����N5c�@�&�Jc���?�B"��?A&�E,w�m��)��%���yB������i:��b���VP?�f��n!�9=U�6ʀ:�����=�[l)�u5�e��K��0�M,9%�eИ��0�^L�&��Al���%	@6J:ch�.��ăKGB�#�.�6�30U��S(��<l�F����� ����F�����!V� 9�������4�fY��A�thJ��o����� �(��r(��F��?���q��Z(�9KM}�h��\�L��J�n:liN �я����		j�EMn큫w�w ��o$8�E(˪�1�C��Io��,��w��*4N�;�G0D!M�Yz�������c����<*E��S�Qg�7��L��h캂�@5G��Ǟ��RcI���P���	۟ �f���ύݐ)P[�O�%�
_'H����g�	4dr	t-&�Z6eu��IwX7)n�5���^? ��D�@�@E_��CE����$q�:��u�:1��M����������Ԋ�����$$��t�ag\�Q $і������@%Ic��"!o6��wȩ9�v�����੤xBb� ��z����e��@Ǭ���;��y6������@\�k<Ѧ��!�A��b�TXl��6��W0wO�!�Tj�FY����|�4�s�YF���}��ҟG�S�ps;pXɽ�2?V� ���6�d�����9��u�Kb L��C��"��9pኰܒ�Ԇ���ɥ�ӧi�m���bIч5+���2��v��Y`2R��H�x�l�r���׾	�Y��9i�M�����n�(6�����"z$�DJ.��������3ЎAX�qFy����3(Y�~��B�}IJh�1��5�,Ә��ޯ3H�|��b�bݧ�?�����~�Z_R/�����8�(%qdDD���9�s��#l��7��C^�U/�iw��Ƿ��2�H�%@'@n�V�W�>�y%��0P��O��e��
�L�	Z3����U[l��Ծ^?�Z��*a���W�_��_Z(�,';o(������8�*����ZϐH�b5�PF�J!&V�:AI�u��M=+��Գ�i7f��y�u�)���ُ~�~��o=5�ޯ�$���y�OӰ���<&w`i�o-����%Xyl�Fc�۵��P,�\�=�J�>�r�Y����@9����ذð\�&݅PP�o�d�諱��6z�5/L����������S�W}��QÎn�u&/k���Ǟ��h!�AvI���`##s���[�CX:�� � �q���B��y�.m��=��j	ŖP����H0�h�
]�}[
l3
9!o�o�a� �)�M6��/�&�F1KC��D�[���#�L��K�9�DI:��?��D�3�pa��#�U}�$]-��1*)FJC(����A�	��襘4�T�1�Ѝ�	I!�7^it���D��CƠJ`2�^�����h,S�7�r�AtY�/�iH���|K�\�}z�컁�T�`�v;p�%�%���#q��8�&�w�osO4��^c/7��Q�Ɠ	�pQ�(.,�;�gՂ�¨
�v-'�X��ك�����}���|�E���bׅ�p4wѻn�7 �͆Jwq�q��J�V�'���sZ���}�u�OPIU�x��R5<�t���
�]̗�ICq��V�5�W9��N�;�M��M�RWあ�1�	DXx��F~q�8eИqv��]���B���<��+-���WY��� ��Fc�^n�A��Ŏ5^aS3�G[�:1$�}��=�s:L�s�1�����zo����o�q1ݐ[�?�ŗ_�5O�b��K%L��T�M(vԡ?�pp���a�$��`�ӋA����O�	�.l�T����%A���*� �$OG�l���=��O/���r�2z�l���qͩ��e.8u;|��t[ ��4C$n%ͷu]u���z� �\��Kg��P���2��@L�_�._r��R�!�}5��ϡ�4Ԗ�"^��
���쏾�19�%���qZ�y��L��'ҭ,.ǧ�Ġ{�^\zK�G�e�]r
� �#I۽TA�� .���&��Дo���C��B�/��>�f�'���u	����<�������;���i�����ݣ�?�.��0	�J� �  �R�����&!���.� �7L����C��[7-�ՠ��K(%	Mr�k�d����=���$��Cu���M����j�f�^C��P?��E�}`�7�%��x%�XYN� =+]��*��wϛ�燮n�}X���C<�`��~�N�
��5����%�]�����Y��aD?m--�PG�u���r���9kR2^ȰD����<ᬠF&�� }z�C������<� ��3Ok��XI/L@��2���{�KVL��F!˖�1=Px	; 	^f�n\�|��xy���&�j�^��Z֊�ft낡�z	1�}����o���]��䁰���͌�����I�8��].��p�CB�K��[�4U���t�n�ch���?���2�iMinݼ��%��ꨅ~~�^��^?�ʰHÍ�v��>��R@*f^z������th��F�(.�PB_Qy���M�GOF��K�	k-9�(���C83�K���I�]I��(����/}�o�ޓ��rU�~� �XG�^Q�]�u�k
N����9Xd]7��ez��#�F���ق!�Xd:��5���+����X�4,�mD�ꮧGF���0T[��W�.��,�X��[$��J�������#',ϻ��S[�'�)���d�8�����P��$��B9�M%�����+��Jz
3�	=��4/��oF�r,}��~�Z9�����4��y�P����e��&��a��/M�-7p )O��5�"�cS(o&�]���?��������!�Xs�u�E��o�IA�L�8z��K)�#���4�{(��|���C1���2:�m/��m�Խ��Z�O���ޭ_�B���ud�0	��_X�h�� ~�V�+N��j�K�﷽ x3/�����7�&�n*
�w��wp�{3Էt�L�����	��W�r�GҊC�[�
`���9����1z�Pü��h�id<�_�\.#����H�H�y�������Xۂ��0銈��֗W�Y[�,�*e��o��eu�w;�z٧�#���m�B��Hz��%��b�[��*-R��	��oT]n8a�X�Ȗ�����7��o���O�iץ\�����
�7I�\�_~���������#S -�L���/x�
���H�6�7A/��xΡݽz��� B4�      �      x������ � �      �      x�eYɖ�F�<��?��b_nP�ԭ��fjT��/}	A2�X(,d����A���>)��4D����GrQ�ҝ�8����p�c�C���[=t�W�0/�.�U�s�da���)��<��}�[�c1�2c����q<���U�0^�ؼ�f)��VY�]ίL1eW����򧶍7�H�]��C�T�5��To�rJs�Da,��k�
|�����uq��x-��~YOf2�.1L�!��՜��[]�:!��
7SBi)D!�U�Gl�O��4��6|f3�)��)��j���/�v8l��	/\!q:���t>&�6��Ax�z8��l17�a8�Cu\v�p��N3&���Jz�����+�5��t>���nC��v��	��cY�R�N[%g�@U�(K}�Cӎ�ag�	��|��C͸t	h��h�Ki�c���p�+L�Q~��s�CS�
���-c��j7��o��J���s%<�N�����%�m�9�'����|n��8��������~F��������P��������~~6Ad���S��������T�`L�B���멝����x+�BC8*�Ȣk�k�j��з	�jb�������q;^X�9/�����!�k�� |=�7��i;���=%J�,w���S��z�373� ��	���P-S��&l���i���@
�U�\��B�%%�
������y�`o��#$ �� mqyT:8���_C�)�YR"K �]��އ�k��0P|&P%�cX�ۂ��#t��_���2�X�a\�����]�歑4p�A��x-ag���H}|pKf���K�)�����=����+�|�H�N�����E�~RLf��޻ж Ou�)����A	k�и \��Ω�o#\��#5�X��҃�CO�Y�����p8�I�N�M��f�L�8�rti'�nPt8����� �?�8�M�I�gTN8��h�$Q~~2��\f q�S]�yNת����6	� \� =h��"�Oq�o#U0�u��.؇�6>ߪ��%5ð)�KÝ��c�8��"q_V~lC"����� dxd����A�M���`�Z9�CS���~��AW�7��ɂ �h���{���P A8'LI�=�{!
Җp��g4-�KfE �
p=g���o��d�t4��e�������M�0�_�8n��� �nL5F�wΫoc�l\�|aV ��E���ԽRNem v� ��\T��zSr^���5<�:#�\�6�.�sC�[��, =6K����i5ևl�,�n��)�5�%f�a�خ/CFeM ��J�󖫪�������0Oq>Annʏ�6�&;��P������c�D�Ƌ���~\c�a�X:3����q����|O���]W�aA�z����ȂN�ρ[H+I��T��7��/���"�:��CUh+� �-3�B��Yqc���~�J�Z��zкx�R����G����a k-r2��O�ѥ��h���4-���RX��J�.7^�����3�H���a�PF̊ �Ҽ#3��T�&0����3h�84'�@%%�C^����n��Y����.�����.�Г��=ԁ�2�:���R����D����ӭ��>���,|c$z�c�ϼ���twR�C)И}����1լ,]��:���d} ��=���U�{0Lj�9�Y����QD�[��c��&3���� mU�.��D\J�؁#\�b�r_f�"j�Ɍ�I�\�a؅͐ɖ��*�r�ꢰ�˯�M�/#e>�8����ϊR�۞$�0���2�n�uX �=�u��ɓ��),(���5��sRXD`��(�5�a�������1]�rea 8`]��->U �Z��RZ�ȅ�H:�!sb����[�u���dI �9�����4c٦+��4a�x��,���a>��-n�d1 ���^S}�1w���8��S�3	K��c���p����Ԭ�r����v�E~�j��0�M]�k�}oD��GpS�~�6�:��G�Y
�����3�Vcl�~�͞5 �)=VLO3�<w�YA`�Hm��)�Dp��������!]����p�	�/ƹ�`)M��ج
��5��8�[�sH��L!��L0!��2|�mLO�ج	�͍R1�^��:]�̍��v�� 4�8��iʇʢ j�!n�M�j��N+��f�@>��oif@��g������ ~G!����ܮ�;�5.0� 5@�MƄ��{�Uw��]j���,K9.4��ݍBT���ot����
�xE*�+�/����ʛ�|��N0�����_R3-�bF�@�K���{|ٍU�U �3bE,�sS��U�u_`��܆y!X���)�6�в�u���9�N�ď��2��x3�|��N����.$��X�S��:�ԍ�����N�>Q���`�A�b۰�h�?aQ�ˋJ��F^u�r�Nh�
�QN��^�F��?��y�KV/���n��\T�����Ћҙft])�[bDh�붗l�ȕQ��2,m�d�q���m2�ܣ�8
�fܺ�#���b;���K�s�p�GM�����1���q��̬/T�I>���2Ƭ�lE�2,����;
v9��b��9�]Iؔ����e�v�Z6`[48�	�|3�~��D�PY�]\P3���%~����d�]����l��HYz=�F)	'R�(rܿ���.ۭ/Z�c;�
X�k������Y��e�Ƶ�=�u%<�'\6[ #� P��j�0����Q�9���,�3����>�T&+�>B93q�3�LK�SI�#�Vjv8S~�#-?��ʤ�(���]���L}%�W�e�V��k�l/�U����:n��O){O����������0R.z<\��W`b�4�U�%h�����{�2C)I�h-�B4fl�l-���ʤ|G��`��W����� �a�j����z�����)s���qJ<T�oRXW��5�.`)��gzRR�ǥ����Ԧ2q}م��3߽���nY�����g,3K,?��-//�:s�ᒰ���񐱆m-�i�v�����x�X���n�� ���9�o��6c�F�+/���dJ��\�u�����پh��/�&���E8æ ���������F ��3�۹l6��u�QP`��b3tH���Y@��4B�#T�0��m"�/m������k	�G��bÃyqH���P�b�`�_.|X�˕v�%�9���=�{%-�ޒ?!1X����}���!��1"+ ��½v	�ax�'�Xh`؁������ಣ�70;�2 �*t���?� �A:"��[��?xs�������.;л)���U�V��2��5R�F�����v���沭 � ��Į���ږ�v�����U����ˊ������͂������`��y�ƫ�6"8r�:����҅���!��j�`M�|`-!\C4���rl�$�hd(`"fW�|�e� 6�����U�E����q�P���fM3Ʊ�+�ǜ���`t��	�&�?dU��>�b�1�-�����~��l�:�;A�#<T�.�o+9���*��0�}OK���u�\�Ϫ f�e�VBq|}�@~��^%]u�H����^ѷy�$ �e�;S�c�j� �#o_c|}�^���K u}��A��v���u�O$���x�f�_C�1֗a#P5dCx ��^����^��>k��wĀ�;�)�Su���9��&- ��%+�`c��J�t}�玞�ݴU��{#&���ʀX�l�q��8���F�����~���g� =��	{�p����j��y�SG����v�PhA��[���pz��gi zj��8�����	uXJ��q�!7�������!9�E�LǡGCu�f�����.`a/ _� �W6�|���@�ڏ�*ĹJ�Mf�J�i1B�S�69z��P=M���4���Kp�ES/qlBş�!}�fxtY����K��'@Ei�]w����Ȑ�@>
�b|qhzJ5��z� ��@>��,,K� ��b�8�t�0Ϭ�� %   ��N��L�����7'�����	��|���ÿ ��Շ      �   �   x�-�;�@C��)r�§$H�P "Q�8�B����	܁� �@���|*�O����9#�݅H%<�6���dɶs�%�5G�D���2S��7�f&+ƕ���'B����>:�����;}�AS)�t�����p]�*YA3�{6LN�����*&;�)Lch�:��oK# o�>      �   6   x�3�t�UN-*�<�<����M�+-I�;����|.cN���D��T��=... 7��      �   1   x�3��/RJ-��)K-�2�tͅ�J/?�8�˘"�������� �#]      �      x������ � �      �   n  x���͎����S�d��g)Ɋ�r)�7޴��B)���G�2O��T���B�� ^�!VߺU�:uS
��r������L�����U]�8��|)m�}��Χ�[�:}�R\y����8��Z���icvɥP�g_�Zꕠ�%�B����z��s|X%zJy�Ҙ[��5bj��Lz-�և��y�a?<�nO��N�����X����뾴����y�7��w���Ӵ��l�+_�j��Ր�zd�=7Z��H�����ô��D�*��UWR�vXO1��[��B�U��6�yx5�(����{��T�l����G��8|�����fwZ��Mcn!�ZW��1'��ت�T��s�����a<nvw�/��ω��\s\ާх�B$4.Yv��L�ۙ��*c�#%��M}&��BP�K �^������~���,p��9J��r�.\�
���%���yiR#'�G���y��d�B�1��f>������f}:_��UL��{���iLՅ��s�xP��.;?|w�n���[+�vV޹�H�7�o!�nwnI�U��i�i���9�6�f;�ݸ�b�j$�jUE�؇�6����-�p`�f��'��PE�`�V�����/��a�l����Ϟ�F���Aq�T�� o{��4m��rp��t�뀝�X�HU�7��nf�xa=_�@/�� u�՗\ڵ�,������~��p7�)�W7�S�+A�(c��x��($x/4�q����F���PH��i�OGvr� (�ę��Zq~�vt�1��]��8���l��܌��_����'���Δ�Q��Є��������6���ë��a}V85���w�n�����%�8�އ�{��TX
��JL3�7�7�*�R��x=�A�W��xz�~�3Ёj	��H1TX�WI����ބX���J���.��
������h�n���w�v;���낁�G�C9��A��U&R5�4a��т���v>���|�V|�!�>��� �C6�14IWg,�����A��#I�N��q�#-ab2:�ۏ���$@A�%��@$F�� Kj�'9��O��U} 8��͋�RYDV02؅㙍��T碴˙���$y*Qvʶ/�L�U��c;���y|�°���
�t�Z:J�J�M�ӟ�N�9�[�x,\��*7=Z61/��
c��a5v���E7�J~�)Fd�����~w9(��4��,�����T������W*Z��.�����|�n�C(j��z�8�����3�h�MC��Q\�MݠG�`�;~�N��hx�5�ɛ��5	�i�K�]�L~z���ʰf�h7e���O��,��2�Ey;��^|�w�4��C@*�x?RT�x�#�̨yFYw���qs����<ob��� ��d��'�]0Ü��l�W������#r��T��b�i���T�����d��L��� ���^$1;!&Sk��#��@N��rB�W90�]�����ؤӆ_`�a3�̏��*LC .}cc\�K/��H�v�2�(	��隸7O�R�P-Ȅ��9�|o��Qϸ��Ij�c�Z�%�*}���W�L�s�as, �gn�V/�(;��(������IAg�!��w�$V�+l#�V�*����D������$���<�gedBS�6���گ��B���q�.���c��@����?����0� ���Ĉ�$��y(Լ �1�����bm�>LFjc��*��s�2�����`��
�(h!C)�Mh�x�'�M�i�q^��y�) �G,�qlɴ�PE��A���ܛ�8J9�,�h��$�91�����6����jIz��!�@״�)��iS�݌�L9Ox��s��2��	��"�*���&�Ik��� o7�u�� o���678]�e9�[�ڍ�i����03W@��e97� �h\�v+eܙ���]��\$ -D�²�(Txa."�X���M���|�������P�H�`��7B/�}L��`J��gv��T����ç���̲w�4�����q��0ճ"���I��Ӣ�PbD�����T��C���"�u�|�jZ��Q���p�����:�8���?2=ϲ[e�J�9��]�⠄Lm��?N'�|](	�6�qAf��jE���/���J�Y���r+*"B%�:�|�}��s���LmƬ�#&"�δԽ���Hv'u�^Zm	I���x��0%3.�x�>�.����2HH��'j[ǟ,L@F�?�(�y��fSƴ��ʏ�2�D 9,d��?|�O��4${}L�BI:s5���J_�gpNM;5�W[&TOI)2yy��F�����M�l
����vzܝ�r��a��Zu<����J��i�m-E���v�N0f֌��2�j����2����������{�9 yA(Ҩ��vZ���5���П�e1,s�
ŵ� �����eT[�of"Y�Gs�*갴�P��/�u-+�"񰾾���$_��c�]�2�xV�;���g�ؽ��%�,��W�b��h6>��v*����iĞ�U���Rh�{�.�+c����=o6�����<?Ml�渊�լ5VU�{�����5~��?��4k���5/G=��X�9r���Ԟގ�	&��^�p<���]��u{.����EW������H-������%YɊG������z=��vl+!7Y6H�Y���J�v��˫���l����5ڬ�K?�X1�^���K�eV�+�v��W3gK���G�<^{��;;I՛��?���_A
z�ͣ���b/޺�
�F%=<q �ġ�V�%X:�e�>��kM̳8*�q���Bgϔ�\�7f�i�;�jM,0��l枝�*��A� ��w�=6����qE��l��X5�U�j�Q_:n@�	,�	��Ab�z+��YJ]^�L죽�Vz����S�������B�K�� CLN�i>��} ��)3���p��ͨ%\���P�~�X� ��o?ۧ��E[O2�P}�?��2l���A�AC�9�c�Otc=_����+�_������|�PѾ��+_��_>��#��1,�C���H�rM����H��G��&��� ��S���I�Xˑ���x����?�t�!g]��F����`�|%��W���5�7�fv\hvul���[s���~���� ���^      �      x��]�r$Ǒ='�"�S�����(qd&�!�2�x�%Q� ����2�o��q�c��=���n�TC�a�&�FTd������yVFY�6�Iy�&q���|���&�ð��}��Z��o�m7�s�Ў��O����}��Z���Ҥ���"�+�k��:����M4ܼ�N�{���4-.r�\�<N�uV��-�n��L7,/�"*���w�n7x��]��Mh��]y��t�5�8��J�v�Z���׮�Uk�&��=�΂��Bc���{l]���uZ=rn®�d��U�ͤ9�2['�ty<>�d��u:�S����'�X>a{��k���@I�^_i��&���]��fY��5U�,�����V��]���'�N�:KX�����q;��Jw���Ď����$���� �f�Rn�j���T����X'�4���u�����?���
����b�ć�W�~�m����J}��<�@V�@�[7��q��]�Ði}����������uS�t�5M�c��M��F�	#� #l�7�F�V�E���<!�Тa\��Dy�>N�� :����Kh,?������w���c(�OQBY�O=�;� P�ԧ����iC��π�:a�4Zӭ�ai.
�Ew^��ޠ?�)\����&aOg�"?���8nR��D!����C�@+e1�iI�鱽A���LP#���7�e~�a�Bh����׷m<.p��U�-Sw��C�Tu��6z��l��ƇC�M��!Oh��$�,͋R4��ih�dU�QmU>���C���@��n���ݭ�'>?�G���!B7�!�81��D�_>�ca"���|�9�6�#kMTز5�B��#8e(i��@"�.C����Þ� Dsj��!=�W�M�4������a!yrd���	�j�	��]̒2�Z1 ���xC&r�/��2�b,f�����O�u����*�f���0����m���ǻe3/�d�շ�
;ì����Ï�?⩽���Q��n�iws��?]�]�Z�M��:�_�eZA�zD s�Ϋ��[n�v�������e���h��h�������������1�n��7��������^�s�ٵsP���~��" a�+B�#�c��>~�x��=�	�h�h%��?�_���r�Q+�����wm����z���	�Ux�M�UcY�ٲ���l�c �j�� C5�";G�BV�gB���A?=`�ˇ ��*�/� 4�w���\ �O�MawE-ꡡs�!]r��l���Y����L���!��;��Y�a��+/���ވ=i�R�%���ůbh�ѐCjc���(�,��(Gcn8�JBxT�HoMԤ��B�1M.�*�h�4�_�����Ps�.����Y�	_���^��}��\����6޷�h|Xv�ˌn	���2��{ ����no�M���*�X!�$:�!�Q�"������/�Z Ͼ[�M;�ܰA�Fl������A�Y8K�ଠ4sH�*���@a�X]P�sp�F�x!�d�����А���Le9¨"�>�&���a�Y�B�|��ː��Ugp,�a����>�w!Y�ޅ1�G9`���Q/=E���vx.��e��#��(�pŰ�`]z
d�Ke g��Nh5�,�߂>L��w~^�<{���
�}�V��ch�xrN��"��0��N'�M8Ɵ������R�Ai�M�6h&�2���ͨ�@]dW�e��Diuث��~A5�a�T�:/�}��z �z?L�Ch#�� ����~"l���&Q[p\���(8�R;��s��������Kn��mMpmé'FG���c-�[��P����w��f�.�q���ݶ[��CKl���4l�]7�S�]�s���� W����77S���\Md0�i��A��a�0��}�,a�`����2�3%�v9llK&�ǫ�V�X � �eZ�P[�C�a$�В���M^�ߍ�c̟�`g	,���	��m7����~�i�ʱ��Nf���������4�e7���D_�ۥ��p�i�Yu�0���,E�E����tfF�Y��������v�i��E04�+��M�d:Z	�����N���eK
ԯ�V�k4�%n���`��z�NV��T@:��l�D��e�I�@��Wo#"��B�ƅ�5�?�p�����t�O��_l9t1Kn;6�n?�&��)��� �����!�,R	0�e�o���߶dV=IX��_��Fn2$�vu�"�+��	��
A�$��(]�(a�h�+?��^���Xm|�k�Ϥ��ͳ�͆�F��&DH���a;�46�<�ʨLH�������KN�+�zk$����2h�����������2�4AV�(�sM�(�4�P3L�DH2v�>�k�a@B�d��<!F���'Nk��<�FF@X�$*h!�U#x*
��Ok�E���&hH/�&NbS�%��$�з8�[w��B:A���4v�|O���%���o�]��]ie�a�;�M�)/���B,o�sbm�G��
�Ǳe��2�A� �%�(5@���MO����~��~-Ά>J	:��oG�O��h(��-�?���C�`�XR���vOP�٪�����(���Q�c���&w����3��p�i�v��aG�N�R a����xnc���2�.x�-�L�ix�+�30����L��������̽=hXp>²$aW�Ns$�eZ�I��8�[ob|��,҇X&����\�a#!�� j�X�&�(2��\nF�'����0���[Pė�r���s�M!mJIQ��R�D*��Xz�BB ���	�uW�00�� _4�Oy��c���[��H;@ �vQ�$�G��M<Ä��!�m&��j���l�#pⲆ<���V����h�Ǆ��^�U���H���qBAC��'X�3c�bd��d�ύ�*����ĦM���&�������S�'����/.���9K���'�hq�*�}c[��SZ���$�����.o��8��� 	j�Ob|_j�B6�9�����-��6�wG�l�$G �e�m4�l{b�S����S���	�|GNY�D$�(�V���l��0�6,�q�Te©J[iTp��B�K���w�Ġ�S�ą~��y�LZ-v1 �6��C�����T�߮<I~��D�61��r)���rjAH�D�w�T�=uJY� ��R�^*��I�3�J��ن��*8?��T39oFQ*�p3���
��5M��Y�r�`��1�`,`k�c��@�^�o��ϙ�֘do�P5�I�!4O���3m�����b��;Hn��^��#�:�g]�Fo#Σ��d�8��˯����"������8NR�R�����<O 
�� �c�ۜ-��̑0���4�5"����H��WU6�@�g��¤�=]�D
!��NKhTS)V��8�cQ�c�fv���d��vC���!�8���[<x��0ŕ�p6+=�#Ey��qԻ-�3:au��V���ؑXc]�9w�5X0�WA-����qn��,��,Fy�ʿ��c={v9��A#=�Ƌ��b��/$�L1�ѷ����^�CXn@5[ɹZ���V%�0,��hMu@PK�������!��0�)*��"��lU��L��"#���_Iڹ��>�ۨ��]�T�e�7�qOlq�s7�,ӌ%{*!��R蚉�,�Plw��ll�¿(�;s�A��)�b���l�H�$�Ir��;�����bM|4c4������@���K:yA�Nخ���͸/Ġe�����{E-	� �ɾ_h3ί�X ��d�p�l�rn����ט˪�!]/lΈb?>
����5jD�Q��/]�Ur��m�/&�dC����o�K2�
8�iuD����:/]	r.��:J�T�$��{���7��eQ$���!�g����E�n+�܀���:��Zcݚ�zdi���5�R�����)(bu��]I�$/�J��$�NK	u�E�5��9)�#@4��n�����?V��	�KPc2���VB�LX�E$ :  �PE��x��l�:'�QkAFe��t����o�'���ؒ1Yz���3�4�07#����>im5ePK;��ZRēWt��^&�)F�=��`B{��_R�����)�=����-U�9�"���l��t��6~;lh�x*�;{�J�}·�F�>�����{�c��SyCԊ�c!�t N�2>�s�Ӥ밴뒆��-[�1ͭޟ�7>��0�)�6vY��`My"e8����Q���*���*R8
��E��e�@Mr�E�����:|��&+9��ّ����u���Ew�+ZX�]�q�0)��*cӬ}�1�~-Z[�yf�0���O`��"�&�����Z)m�@��A���և��6�q\���zW�1h��4��d]��jc>����!'�P��nZ�I�Jݽ��>��:�*儲��~��bf���qg�͖������p��f��ia۠I�O/	2�7y7�;Ŕ4w�U��"��&f�%��zo�H�`s"�����Afn���X��sJ>%}�\E!��k�淲')��.��7�(>�#'��l^����L0��3.L)������6��}�-��P� O�Gp�F�O�<��'m�b��3��� N_߆vD���[��̦�?���]��W����ƣ��t}���LDc��y�-���~��D\R5�v�K�������t���w>�+d9��)�[��/uj�F�03�};��j��yT�Xz�A5�t�S�̤I�+>lR�h[5���t"��8���M���C
�1�V(�v��뀌Hp�k1�(���N_3�J>c_�k��������K�p'O��P�+:RY�����-%�����j�����O�ȴ�*z�9H���9�����>s��w^�n3]�� ���f|"����"�'�ބ���6��gE����{=��(���Й�H���JN�}άx�s�y����߻�o�xxkTT�8\�Z�P˅��)qMU�t�_�ՏT|5l-霷�����4J�C�����]��?RG�MM��V�3��!������%�J1�چ�iM)��/��Ӎ��;ӕ�9:m\�]QUql��n=|~�pҲ��E��jf���z��	^r	hz��y���;��|���T��ԘOfAAW 5�f�W�>A��>s���2+�:��$�-B��n�L���XGQ��A���c�\t��9�e,C�'C�����RJБX]O#�Q����8�98;F*�ѻí+a�[�d�ҹ[u� ���-}���&<̉Qm۟��T��nl��Y*�`������./2je�:ز1��Gi�� ���ڬ}� �n���b�JY5�u�pJh�旘f~�ڼ���\䉷9��!%�L���~��q���E�_r�G=��6�{0��nu��TO���7ő�cp���~U\�'梘��Q��K����/�P]dB�'.wFܭ�;���%�H �@nȑ�<��gн}�{���5+`��cg�/\�ri�[YԿ\Eo&��ng:�{��FNH~v$��:���R����y�=��|��SYu� �܁UB�0z�q�27���=�5�E�����VT}ʯ<zMQ�[��'�YUF�l�vK9��y��K+��g�̧���A7��r1��?��B��z�I��}����*z�K;��n��Sw��lB/I�3�/0�a��giIǗ�v�m���I/�R�En_��9w}�c��_��	��.��Ч̄%������F7�%��� ]�����
z���9M�#|�[M��3]s��;w_��|[�wg��O�����/������}��KËT�i�w|���#�G͎[����W�*Y�ݸዶ�R�ݜ���݆���W�����ǫ������c       	      x��\ْ�Hv}�~���N?)Z��V���~�	���R"��s����97W�X�JK��h�H�"���{�TI��t��y�B���We��;{�y��,�5�RE��r����������x������9��9;6�v8e�������4,���	��N�}��'���2{3���f<���_��ݩ�g���ŗ��i����a��E�5���m�a�L5ޠ4�U�j�\�T�RھC�"�Yެ�ZE�������/�}����p��������͈G�����"{�]�2��y��Oۻ�ܟ��~<���~<m�)%��3�L��nVy�k�P�Z^��j�I��%U�ݱ����n�`�%7��>��l����Hq���nw����N��a����n�=�xΦ��8�!�a?�ٿQB�xw�v�� yyp��iX����1~k*q���$���z�-��x?���Zn�������f��|�v�յLK��D�o^��BY��З�V�I����x3f��6�b�P͸�����Ñ�p|wد��2���}��_pA��F,��We��U�����ߟa����-�W4�]>�>�{k�_���_�&�v8��y��_��:�θG,\�`ןN}v�P q꾧�.3c����ݎ7�"�ڊN3���eۉ���*�Ӊ�v�n�\�:�#Iה*^�����-�L���P^�?.vNY6`�:��(k�!
".�*��=���f����Mvw�#�o��^s�mFhR����X2���@6��lDu���a��m���&�K[��ƒr*�7����V�K:6+:�������@�`#>�6�����u��^�4IhvB����w�����i���!9�W�[U��
J�jVU��u��~8A����ʱ�
/��mr�l�^:��c}�$U�za[T\É��M��@(��A�b��3�;� ��K?.X�p�VUY^��VemM0�{f��� �amqF���,W:���^�J��t�-n��UY�T�������f�;Y��J� ����������K� �a]�|�8�#�q�qމ��`iq�[�X�)��0��Z�`W0�}����p��g`�v=���ߎ�A����7yr��aQEQT�"�Һ��>�`@%Ա�	����#T7b�z����a��R
����2�]L�}[�0MF��8�2���	V�HK�Ӵ�>Ю{�v��6#�&x�YD�b�?Mg�`k�?�!��NWy$��0���X��t`æA��}K��&��c'	ƂQ�����wؓ�9�@W?aY쏠S��鎲��+��RԨ�\\�� �vDW�)CxP���]���Vy���v;�(�[� ���.�
�;ף����~xG���� �����ߌ�j�T©	��^PQ�5�@�[�#��@���џ?���z�L{c�r�a���M��j��1:�@�~ܛ�V�j墩	P�fZ4m������T�ٴ-������"n�2~(�:�G%<L������GԒ�3�I$�
<6ՔWd�C��.1ɉӕ	g�53�p�R�Ő�W��P�.��چe�#�k��.�P����o�[�I�/���*2�R�!�M��sr�rUa+0Id| �2��?ۢ�fd�9��(t!��0��b���8�Fa�o�i-aK��Z��.���BJ�Q�ÿZ���Ѽ��sJ��(�r�5��al�LB8(��W �n�����x�k.��q�{� o9R�a���$�ρ�K����/�{�,��:�EĩTH��ħJE��V��#tt,	�.Z�d�g��:��������=���ȓؽ�;�.��\`�Yj��8�"<PR��S�3-�O�&��Jh�D��$P���J��}A3^IK�ߛ�H3t;{6�H`i�
�����Z���c=~ٌ�8n��.��ݠ�w�I`��kM�����x`�_�h%�_�!8���#Y��"�{�di*��4���L�2�S�i&;ﰈ�˴�ٙ!��[)�
I�a)��U:��2${��H/��,��33���*1)0x����g�-�.�o�K���νc��ɸ��;b3;��Y���z:CÖ���.�s-����@Ըq����e^3�E���7Ŏ��SKI�TGX�uH�[�Nfko�/�rRc��s1~��(�k*E��l����Dbpd�'j��]���^%���=�?w�3�5Ju�ׄd뽠�����K�l�tΗx:1Ղ��Gi����2x}�^�����"N�K��g �e��F!��\/J��}S!�5�d�L �q�xa^�~(��T��ؚ�����Ⱥ
_$4哂�H#j%R�*�8�\wR$�������iQ���p=�DZ�iRrf����s�h/�/��+�2�/fՊ��0��ڽ�����C�7{r�p�)Hz�'4HJ�Q��D,af�$���]�Le2�e��{`�kI�LU4���PA'i��\{'aUJ���I�u	�hN�������pl�[���w�h�?-�h�J�Nl��k/�	5�>��m�VOk�s�"*%��UJ���jA
]O��4QT��� �2��oN�ΙX��_S5�[�T��n�Ű���Kf��5���ì�AO�{b��Ce��c�_i�ġ?OI4�55L�j9z�|'�n�es�ղ��(-�� |c<JZ>�!����%e��6a�JVz��-/Ȟ�\Q-��E���?�m��	�&x���&�:o��gi�P�P��4�.���'.��Y���()����e��&�`K�,S���\!}����凔	�o:K� 
�[:�-�T���j�M�Ot]]OFR������7	�ʥ��J�Jڨ���#�X�	��xR�NS��啔��s�~X��RY0���u��H F��cŪ�~e��|��m��Y���&l�g�G�t��R��'AH��	��-��B�kB۔LGL_�����&�B��<r֒avV3��Y؇g���JG�G��Hѱ��֚	���
��k���;��YT{r�nkɾpia�����
3'�{R�`M��^�k���,��%���;����G.>�Z��v~d`QKq_#��)����|7�`�*	[3|��W�C�%S��N���";���HJL]$0K�̻4�S��)hfm�[�y�p|�;�����i���Z��6��s"���SVI�/�f7F�cm�bD��-���Ӫ�j{�A��S��a��Y�v�ʓ�t������0��� �E�����K�2bD����A�P)�$CrA�֮��<i����"z!ܘ}9m���[5�U��d���0l#�����FB)�Vf��a�D��g#J��@�D,S��v��!;�2��5c�[x�3�3��O���f�	ZUZ}�RH�:�f˒e�
�35	����R���ɋU�����G���Xp�j�	BZu��m!t�j�|�mf���I��f��_�/?Q4i1YâeT�2Y�>%ke+&����V�9�6$2���R:5��ƒ�`h�0�R̰����y�r\�u�G�ѯ颖I���S�'�a��2�Ȍ3���'+V��{��P�u�/�	��$�Ӻm�?C��q*��1Ĵ.gc�,
74� 5$'0�SR����gW�]���(�c�c��w��VQ�ݜ'`sƶ=��p.����rT(�:�`)�H����:Z��L-�L&�}@���7HrsD����kك�9�d��+w7���b�@�ג�8D�!ř��Ѭ�ݗ��Y���@]�dA�2T�晆��
}����C<(��%����KY/pH�bα����eaV�aD���>�xW,r��-����Q�㞄�ȉu�Xm|�
�L�������0�@���*7.m���8|]DE	R˴�����JS��4>���E����4���`�L*_���Æ玮�+�h�EX%�O�xM�P�G	��u���&��Ԯe�*=*i��r�D_9��ο4e�r*�*e��ɷk;��m�c��KiS��yL��d����k.�msI�����G�_�&Nj;a�-�G�^��,	�ƚ����P��rqv�H��8mH،h��"�[m-��!���R~f�(�R6	2�!��T���8�Trև#A�*)��Z �  H%P�0^W�WZ��md���gGE?R+��j�ԣ"�iRx24f~f8;�s�p�i�CQJ�32���n<%ų!v����~bs��s�BZm�sǔx�P��DH'����WY�9˲�1�T���IKN�m��[�9:Z�g��E�t�i����}4�!��n�{�ֹ�8Z�z�ՃM�3�2�����[L��r^�˵�:tr�.<-:����F���̸+r������UK�2�5j)W�H��@�\
�����(b`����đ�,�-ou ��-޶I ���.����9��m�62''��i�JL�Xo��瞝3Y����!�o�+��sw���yR�r���=$�$���	B_�M��j�L2���T#�	m9��ˠ���Nm;뺩��W�Ǽ\�ɘ"|c�������<}vy��␑�j��²T	�.��aq����l�[E~ړ��[���k���#�m|�T�e�4�푙hH��[���`�JN��I��<�&%|J�!X��T�09�_���׳����S���
���g�Rr`/-'BTQ����R��.�����(E�R������S����'�c1#�����C9;V��@�GΕ|('K��W6p� gQ��{���M�6R�S�P����{|
IG��τ��#oe�h����A�5]h!'�ϒH����̖������a�2��Ts�g�w��XU��j��R]*���HB�)���#���q���a��VGK�I䳈#G2+��2��'��Ӯ���9Æ�Xʊ�&�
@i�[�8��u!Ӯ�}�O.m!�e
V�E��&~=Li
��3�gɛ���v*&���vR�qm+�����ܔ?~g��Z��r�j��Ȑ�!�q���`����pg�vm�a\esy���3n���Pr��74�G��>�o8sK0�75�n�X�}�)�������{����<���X݅k�=܊|!^A��X���|-g%'j���|���o��=<����D��L2f��[�3m�{���בi7�w>�V0	��y}�ﳟ��?0+:��uφVU�d�������f��5��WV`!�|�Xǵ��"�[�����_��n{��km���Cu}�������h�;��j�
��
��.t\�s��s��(]�%+��"Te����o6"6���מڬ�Ǟ�wm�_�qq_��i���~���_^�y����������|­�n���U��y>�%���L��� q�)      	       x�3�t/J�KI�2�H-,M������� U�`      	      x�3�(�/H���2�t*-1b���� Yz      	   C   x�3���+.I�I<����|.#N�ļҒ�<ט�%�8�$�*m�������5����1z\\\ T� �      	      x������ � �      		      x������ � �     