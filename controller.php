<?php

public function getReservation($idReservation) {
        $sql = 'select Date_Arrive as datedebut, Date_Depart as datefin,'
                . ' Nombre_Client as , Restaurant as pension_complete from Reservation'
                . ' where BIL_ID=?';
        $reservation = $this->executerRequete($sql, array($idReservation));
        return $reservation;
    }
