<?php

class myUser extends sfBasicSecurityUser {

    public function initAuthentificationVarsForUser(TblUser $user) {
        $this->setAttribute('user_id', $user->getUserId());
        $this->setAttribute('user_nom', $user->getUserNom());
        $this->setAttribute('user_prenom', $user->getUserPrenom());
        $this->setAttribute('user', $user);
        $profile = $user->getMaxProfil();
        $this->setAttribute("profil", $profile);
        $fonction = RefProfilQuery::create()->findPk($profile);
        $this->setAttribute('fonction', $fonction->getProfilLib());
        $this->setAuthenticated(true);

        //enregistrer la date de derniere Connection
        $user->setUserLastCnx(date('Y-m-d H:i:s'));
        //nombre de connection
        $nbr = TblUserQuery::create()
                ->filterByUserId($user->getUserId())
                ->select(TblUserPeer::USER_NB_CNX)
                ->findOne();
        $user->setUserNbCnx($nbr + 1);
        $user->save();

        //recup des profil de l'user
//                               $profils = $user->getLnkUserProfil()->getRefProfil();
//                               foreach ($profils as $profil)
//                               {
//                                               /* @var $profil RefProfil */
//                                               $this->addCredentials($profil->getProfilLibSf());
//                                    
//                $user_profil_lib .= ' '.(string)$profil;
//                               }
//   
//          $this->setAttribute("user_profil_lib",$user_profil_lib);

        $Profils = $user->getLnkUserProfils();
        foreach ($Profils as $Profil) { /* @var $lnkProfil GacLnkUserProfil */
            $this->addCredential($Profil->getRefProfil()->getProfilLibCourt());
        }
    }

    public function getUserId() {
        return $this->getTblUser()->getUserId();
    }

    /**
     *
     * Retourne le TblBackofficeUser authentifié
     * @return TblBackofficeUser
     */
    public function getTblUser() {

        // FIXME : a corriger quand l'authentification et la gestion des droits seront faites
        $backoffice_user = TblUserQuery::create()->findPk($this->getAttribute('user_id', 1));
        ///////////////////////////
        if (!$backoffice_user) {
            $backoffice_user = new TblUser();
        }
        return $backoffice_user;
    }

}
