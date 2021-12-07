<?php 
	const BASE_URL = "http://localhost:8080/LapicitoShop-Almacen";
	// const BASE_URL = "https://lapicitoshop.000webhostapp.com";
	//const BASE_URL = "https://lapicitoshop.azurewebsites.net";


	//Zona horaria
	date_default_timezone_set('America/Lima');

	//Datos de conexión a Base de Datos
	const DB_HOST = "localhost:3307";
	const DB_NAME = "lapisprueba";
	const DB_USER = "root";
	const DB_PASSWORD = "";
	const DB_CHARSET = "utf8";

	//Datos de la BD en produccion
	// const DB_HOST = "localhost";
	// const DB_NAME = "id17765837_lapicitoshop";
	// const DB_USER = "id17765837_root";
	// const DB_PASSWORD = "HItpZ9)/?~bs8<lm";
	// const DB_CHARSET = "utf8";

	//Para envío de correo
	const ENVIRONMENT = 1; // Local: 0, Produccón: 1;

	//Deliminadores decimal y millar Ej. 24,1989.00
	const SPD = ".";
	const SPM = ",";

	//Simbolo de moneda
	const SMONEY = "$";
	const CURRENCY = "USD";

	//Api PayPal
	//SANDBOX PAYPAL
	const URLPAYPAL = "https://api-m.sandbox.paypal.com";
	const IDCLIENTE = "AdfEqhpPVQCRAWG6jyJu6wKTQ5p4hDOBBWYepJpf97YxCS7x12DGdxOLmmMB7_RwhjY92ntm2Jztujfc";
	const SECRET = "ECNiYyvfc6R8xofXtl8TxjBaetdNjqnXJkdDxLOQ5vVG8TY0IAqGye1NhE3KhdS-OUiqMBCDQjA5ke34";
	//LIVE PAYPAL
	//const URLPAYPAL = "https://api-m.paypal.com";
	//const IDCLIENTE = "AYYDNYLM_4iH5ORrG4n8v7SJovrLllhZI5Nu2Ds0QscGKguXP5spI6rTX5gBxCghdcYiH1Y6tyBUvcYl";
	//const SECRET = "";

	//Datos envio de correo
	const NOMBRE_REMITENTE = "Lapicito Shop - Tienda Virtual";
	const EMAIL_REMITENTE = "dereckalexander2001@gmail.com";
	const NOMBRE_EMPESA = "Lapicito Shop";
	const WEB_EMPRESA = "www.dereck.com";

	const DESCRIPCION = "La mejor tienda en línea con artículos de moda.";
	const SHAREDHASH = "TiendaVirtual";

	//Datos Empresa
	const DIRECCION = "Aquí nomás";
	const TELEMPRESA = "+51 980495936";
	const WHATSAPP = "+51 980495936";
	const EMAIL_EMPRESA = "dereckalexander2001@gmail.com";
	const EMAIL_PEDIDOS = "dereckalexander2001@gmail.com"; 
	const EMAIL_SUSCRIPCION = "dereckalexander2001@gmail.com";
	const EMAIL_CONTACTO = "dereckalexander2001@gmail.com";

	const CAT_SLIDER = "1,2,3";
	const CAT_BANNER = "4,5,6";
	const CAT_FOOTER = "1,2,3,4,5";

	//Datos para Encriptar / Desencriptar
	const KEY = 'abelosh';
	const METHODENCRIPT = "AES-128-ECB";

	//Envío
	const COSTOENVIO = 5;

	//Módulos
	const MDASHBOARD = 1;
	const MUSUARIOS = 2;
	const MCLIENTES = 3;
	const MPRODUCTOS = 4;
	const MPEDIDOS = 5;
	const MCATEGORIAS = 6;
	const MSUSCRIPTORES = 7;
	const MDCONTACTOS = 8;
	const MDPAGINAS = 9;

	//Páginas
	const PINICIO = 1;
	const PTIENDA = 2;
	const PCARRITO = 3;
	const PNOSOTROS = 4;
	const PCONTACTO = 5;
	const PPREGUNTAS = 6;
	const PTERMINOS = 7;
	const PSUCURSALES = 8;
	const PERROR = 9;

	//Roles
	const RADMINISTRADOR = 1;
	const RSUPERVISOR = 2;
	const RCLIENTES = 3;

	const STATUS = array('Completo','Aprobado','Cancelado','Reembolsado','Pendiente','Entregado');

	//Productos por página
	const CANTPORDHOME = 8;
	const PROPORPAGINA = 4;
	const PROCATEGORIA = 4;
	const PROBUSCAR = 4;

	//REDES SOCIALES
	const FACEBOOK = "#";
	const INSTAGRAM = "#";
	

 ?>