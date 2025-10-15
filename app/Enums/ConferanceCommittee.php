<?php

namespace App\Enums;

enum ConferanceCommittee :string
{
    case CHIEF_PATRON = 'chief_patron';
    case PATRON = 'patron';
    case CONVENER = 'convener';
    case ORGANIZING_CHAIRS = 'organizing_chairs';
    case ORGANIZING_COMMITTEE = 'organizing_committee';
}