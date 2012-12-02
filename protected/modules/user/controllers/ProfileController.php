<?php

class ProfileController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * Lists all models.
	 */
	public function actionIndex($id=0)
	{
        if($id==0){$id=1;}// FIXME: нулевой идентификатор -- это страница своего профиля
        // TODO: проверять права на просмотр профиля

        $this->render('index',array(
            'model'=>$this->loadModel($id),
        ));
	}

    private function loadModel($id)
    {
        $model=User::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }
}
