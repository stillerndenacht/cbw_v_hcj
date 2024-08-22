# rock paper scissors lizard spock game mithilfe von dictionaries
import random
 
rules = {
    "Rock": ["Scissors", "Lizard"],
    "Paper": ["Rock", "Spock"],
    "Scissors": ["Paper", "Lizard"],
    "Lizard": ["Spock", "Paper"],
    "Spock": ["Scissors", "Rock"]
}
 
round_count = 0
player_stats = {"wins": 0, "losses": 0, "ties": 0}
computer_stats = {"wins": 0, "losses": 0, "ties": 0}
 
while True:
    round_count += 1
    print(f"Round {round_count}.")
    choice = input("What do you choose? Rock, Paper, Scissors, Lizard, Spock. End to end the game.\n").capitalize()
    computer_choice = random.randint(0, 4)
 
    choice_names = ["Rock", "Paper", "Scissors", "Lizard", "Spock"]
 
    if choice == "End":
        print(f"Thanks for playing! Final results: \n Rounds played: {round_count - 1} \n  Player: Wins: {player_stats['wins']}, Losses: {player_stats['losses']}, Ties: {player_stats['ties']} \n Computer: Wins: {computer_stats['wins']}, Losses: {computer_stats['losses']}, Ties: {computer_stats['ties']}")
        break
 
    if choice not in choice_names:
        print("Invalid input. Please try again.")
        round_count -= 1
        continue
 
    print(f"You chose {choice}. computer chose {choice_names[computer_choice]}.")
 
    if choice == choice_names[computer_choice]:
        print("Draw")
        player_stats["ties"] += 1
        computer_stats["ties"] += 1
    elif choice not in rules[choice_names[computer_choice]]:
        print(f"{choice} beats {choice_names[computer_choice]}. You win! ")
        player_stats["wins"] += 1
        computer_stats["losses"] += 1
    else:
        print(f"{choice_names[computer_choice]} beats {choice}. You lose!")
        player_stats["losses"] += 1
        computer_stats["wins"] += 1
   
    print(f"Round over. Total round count: {round_count}. \n Current results: \n Player wins: {player_stats['wins']}, Player losses: {player_stats['losses']} \n Computer wins: {computer_stats['wins']}, Computer losses: {computer_stats['losses']} \n ties: {player_stats['ties']}")
 
 
 
 
 