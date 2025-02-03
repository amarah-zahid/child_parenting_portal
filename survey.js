function evaluateBehavior() {
    const disrupts = parseInt(document.querySelector('input[name="disrupts"]:checked')?.value || 0);
    const grades = parseInt(document.querySelector('input[name="grades"]:checked')?.value || 0);
    const bored = parseInt(document.querySelector('input[name="bored"]:checked')?.value || 0);
    const completion = parseInt(document.querySelector('input[name="completion"]:checked')?.value || 0);
    const irritable = parseInt(document.querySelector('input[name="irritable"]:checked')?.value || 0);
    const calming = parseInt(document.querySelector('input[name="calming"]:checked')?.value || 0);
    const emotion = parseInt(document.querySelector('input[name="emotion"]:checked')?.value || 0);
    const feelings = parseInt(document.querySelector('input[name="feelings"]:checked')?.value || 0);
    const setbacks = parseInt(document.querySelector('input[name="setbacks"]:checked')?.value || 0);
    const anxiety = parseInt(document.querySelector('input[name="anxiety"]:checked')?.value || 0);
    const sleep = parseInt(document.querySelector('input[name="sleep"]:checked')?.value || 0);
    const burn = parseInt(document.querySelector('input[name="burn"]:checked')?.value || 0);
    const live = parseInt(document.querySelector('input[name="live"]:checked')?.value || 0);
    const upset = parseInt(document.querySelector('input[name="upset"]:checked')?.value || 0);
    const tantrums = parseInt(document.querySelector('input[name="tantrums"]:checked')?.value || 0); 

    const total = disrupts + grades + bored + completion + irritable + calming + emotion + feelings + setbacks + anxiety + sleep + burn + live + upset + tantrums;
    const count = [disrupts, grades, bored, completion, irritable, calming, emotion, feelings, setbacks, anxiety, sleep, burn, live, upset, tantrums].filter(v => v > 0).length;
    const averageScore = count ? total / count : 0;
    let evaluation;
    if (averageScore >= 4) {
        evaluation = "The child is exhibiting positive behavior. Thank you for taking the time to contribute to your child's growth and development. Your participation is greatly appreciated!";
    } else if (averageScore >= 2) {
        evaluation = "The child shows average behavior, with areas for improvement. Thank you for taking the time to contribute to your child's growth and development. Your participation is greatly appreciated!";
    } else {
        evaluation = "The child may need additional support to improve behavior. Thank you for taking the time to contribute to your child's growth and development. Your participation is greatly appreciated!";
    }

    document.getElementById('evaluationResult').innerHTML = `Average Score: ${averageScore.toFixed(2)}.<br>${evaluation}`;
}