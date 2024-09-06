<?php
function findAllMembers($db)
{
    $sql = "SELECT m.id, name, i.url as avatar FROM members m LEFT JOIN images i ON m.id = i.member_id";
    $result = mysqli_query($db, $sql);

    if (!$result) {
        echo 'Error executing query: ' . mysqli_error($db);
        return [];
    }

    $members = [];

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $members[] = $row;
        }
    }

    return $members;
}

function findOneMember($db, $id)
{
    $query = "SELECT 
                m.id, 
                m.name, 
                m.epithet as epithet,
                mp.bio as bio, 
                mp.age as age, 
                i.url as avatar 
            FROM members m 
            LEFT JOIN images i ON m.id = i.member_id 
            LEFT JOIN members_profile mp ON m.id = mp.member_id 
            WHERE m.id = ?";

    $sql = $db->prepare($query);
    $sql->bind_param("i", $id);
    $sql->execute();

    $result = $sql->get_result();
    $member = $result->fetch_assoc();

    if (!$member) {
        return null;
    }

    $sql->close();

    return $member;
}
?>