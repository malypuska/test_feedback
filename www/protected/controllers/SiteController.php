<?php

/**
 * Главный контроллер сайта
 * @todo настроить права доступа
 */
class SiteController extends Controller {

    /**
     * Declares class-based actions.
     */
    public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'class' => 'CCaptchaAction',
//                'foreColor' => 0xfee714,
//                'backColor' => 0x554B49,
                'maxLength' => 4,
                'minLength' => 4,
                'width' => 100,
                'height' => 36,
            ),
        );
    }

	public function actionError()
	{
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render('error', $error);
	    }
	}    
    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {

        $model = new Feedback();
        $data = Yii::app()->getRequest()->getPost('Feedback', null);
        if ($data) {

            $model->attributes = $data;
            
            if ($model->save()) {
                
                $mail = new YiiMailer('message', array('message' => $model->message));
                
                $mail->setFrom($model->email, $model->name);
                $mail->setTo(Yii::app()->params['feedback']);
                $mail->setSubject('Обратная связ');
                $mail->setBody($model->message);

                if ($mail->send()) Yii::app()->user->setFlash('feedback-success', "Сообщение отправлено");
                else               Yii::app()->user->setFlash('feedback-error', "Сообщение не отправлено");
            }
        }
        $this->render('index', array('model' => $model));
    }

}
