<?php 

class loginController extends Controller {
  function __construct()
  {
    
  }

  function index()
  {
    $data =
    [
      'title'   => 'Login to your account',
      'padding' => '0px'
    ];

    View::render('index', $data);
  }

  function post_login()
  {
    //if (!Csrf::validate($_POST['csrf']) || !check_posted_data(['usuario','csrf','password'], $_POST)) {
    if (!Csrf::validate($_POST['csrf'])) {
      Flasher::new('Not authorized access.', 'danger');
      Redirect::back();
    }

    // Data pasada del formulario
    //$usuario  = clean($_POST['usuario']);
    //$password = clean($_POST['password']);

    // Información del usuario loggeado, simplemente se puede reemplazar aquí con un query a la base de datos
    // para cargar la información del usuario si es existente
    /*
    $user = 
    [
      'id'       => 123,
      'name'     => 'Bee Default', 
      'email'    => 'hellow@joystick.com.mx', 
      'avatar'   => 'myavatar.jpg', 
      'tel'      => '11223344', 
      'color'    => '#112233',
      'user'     => 'bee',
      'password' => '$2y$10$R18ASm3k90ln7SkPPa7kLObcRCYl7SvIPCPtnKMawDhOT6wPXVxTS'
    ];
    */
    
    //NEW CODE
    if(!$usuario = Model::list('usuarios', ['usuario'  => clean($_POST['usuario']), 'password' => clean($_POST['password'])], 1)){
      Flasher::new('Incorrect user or password.', 'danger');
      Redirect::back();
    }
/*
    if ($usuario !== $user['user'] || !password_verify($password.AUTH_SALT, $user['password'])) {
      Flasher::new('Las credenciales no son correctas.', 'danger');
      Redirect::back();
    }
    */
    // Loggear al usuario
    Auth::login($usuario['id'], $usuario);
    Redirect::to('home');
  }
}